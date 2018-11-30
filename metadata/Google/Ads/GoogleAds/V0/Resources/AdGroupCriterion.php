<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/resources/ad_group_criterion.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V0\Resources;

class AdGroupCriterion
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V0\Common\Criteria::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Common\CustomParameter::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\AdGroupCriterionStatus::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\BiddingSource::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\CriterionType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\QualityScoreBucket::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab01d0a3a676f6f676c652f6164732f676f6f676c656164732f76302f72" .
            "65736f75726365732f61645f67726f75705f637269746572696f6e2e7072" .
            "6f746f1221676f6f676c652e6164732e676f6f676c656164732e76302e72" .
            "65736f75726365731a35676f6f676c652f6164732f676f6f676c65616473" .
            "2f76302f636f6d6d6f6e2f637573746f6d5f706172616d657465722e7072" .
            "6f746f1a3d676f6f676c652f6164732f676f6f676c656164732f76302f65" .
            "6e756d732f61645f67726f75705f637269746572696f6e5f737461747573" .
            "2e70726f746f1a32676f6f676c652f6164732f676f6f676c656164732f76" .
            "302f656e756d732f62696464696e675f736f757263652e70726f746f1a32" .
            "676f6f676c652f6164732f676f6f676c656164732f76302f656e756d732f" .
            "637269746572696f6e5f747970652e70726f746f1a38676f6f676c652f61" .
            "64732f676f6f676c656164732f76302f656e756d732f7175616c6974795f" .
            "73636f72655f6275636b65742e70726f746f1a1e676f6f676c652f70726f" .
            "746f6275662f77726170706572732e70726f746f22b1180a10416447726f" .
            "7570437269746572696f6e12150a0d7265736f757263655f6e616d651801" .
            "2001280912310a0c637269746572696f6e5f6964181a2001280b321b2e67" .
            "6f6f676c652e70726f746f6275662e496e74363456616c756512600a0673" .
            "746174757318032001280e32502e676f6f676c652e6164732e676f6f676c" .
            "656164732e76302e656e756d732e416447726f7570437269746572696f6e" .
            "537461747573456e756d2e416447726f7570437269746572696f6e537461" .
            "74757312550a0c7175616c6974795f696e666f18042001280b323f2e676f" .
            "6f676c652e6164732e676f6f676c656164732e76302e7265736f75726365" .
            "732e416447726f7570437269746572696f6e2e5175616c697479496e666f" .
            "122e0a0861645f67726f757018052001280b321c2e676f6f676c652e7072" .
            "6f746f6275662e537472696e6756616c7565124c0a047479706518192001" .
            "280e323e2e676f6f676c652e6164732e676f6f676c656164732e76302e65" .
            "6e756d732e437269746572696f6e54797065456e756d2e43726974657269" .
            "6f6e54797065122c0a086e65676174697665181f2001280b321a2e676f6f" .
            "676c652e70726f746f6275662e426f6f6c56616c756512320a0c6269645f" .
            "6d6f646966696572182c2001280b321c2e676f6f676c652e70726f746f62" .
            "75662e446f75626c6556616c756512330a0e6370635f6269645f6d696372" .
            "6f7318102001280b321b2e676f6f676c652e70726f746f6275662e496e74" .
            "363456616c756512330a0e63706d5f6269645f6d6963726f731811200128" .
            "0b321b2e676f6f676c652e70726f746f6275662e496e74363456616c7565" .
            "12330a0e6370765f6269645f6d6963726f7318182001280b321b2e676f6f" .
            "676c652e70726f746f6275662e496e74363456616c7565123b0a16706572" .
            "63656e745f6370635f6269645f6d6963726f7318212001280b321b2e676f" .
            "6f676c652e70726f746f6275662e496e74363456616c7565123d0a186566" .
            "666563746976655f6370635f6269645f6d6963726f7318122001280b321b" .
            "2e676f6f676c652e70726f746f6275662e496e74363456616c7565123d0a" .
            "186566666563746976655f63706d5f6269645f6d6963726f731813200128" .
            "0b321b2e676f6f676c652e70726f746f6275662e496e74363456616c7565" .
            "123d0a186566666563746976655f6370765f6269645f6d6963726f731814" .
            "2001280b321b2e676f6f676c652e70726f746f6275662e496e7436345661" .
            "6c756512450a206566666563746976655f70657263656e745f6370635f62" .
            "69645f6d6963726f7318222001280b321b2e676f6f676c652e70726f746f" .
            "6275662e496e74363456616c756512600a186566666563746976655f6370" .
            "635f6269645f736f7572636518152001280e323e2e676f6f676c652e6164" .
            "732e676f6f676c656164732e76302e656e756d732e42696464696e67536f" .
            "75726365456e756d2e42696464696e67536f7572636512600a1865666665" .
            "63746976655f63706d5f6269645f736f7572636518162001280e323e2e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76302e656e756d732e42" .
            "696464696e67536f75726365456e756d2e42696464696e67536f75726365" .
            "12600a186566666563746976655f6370765f6269645f736f757263651817" .
            "2001280e323e2e676f6f676c652e6164732e676f6f676c656164732e7630" .
            "2e656e756d732e42696464696e67536f75726365456e756d2e4269646469" .
            "6e67536f7572636512680a206566666563746976655f70657263656e745f" .
            "6370635f6269645f736f7572636518232001280e323e2e676f6f676c652e" .
            "6164732e676f6f676c656164732e76302e656e756d732e42696464696e67" .
            "536f75726365456e756d2e42696464696e67536f7572636512610a12706f" .
            "736974696f6e5f657374696d61746573180a2001280b32452e676f6f676c" .
            "652e6164732e676f6f676c656164732e76302e7265736f75726365732e41" .
            "6447726f7570437269746572696f6e2e506f736974696f6e457374696d61" .
            "74657312300a0a66696e616c5f75726c73180b2003280b321c2e676f6f67" .
            "6c652e70726f746f6275662e537472696e6756616c7565123b0a15747261" .
            "636b696e675f75726c5f74656d706c617465180d2001280b321c2e676f6f" .
            "676c652e70726f746f6275662e537472696e6756616c7565124e0a157572" .
            "6c5f637573746f6d5f706172616d6574657273180e2003280b322f2e676f" .
            "6f676c652e6164732e676f6f676c656164732e76302e636f6d6d6f6e2e43" .
            "7573746f6d506172616d65746572123e0a076b6579776f7264181b200128" .
            "0b322b2e676f6f676c652e6164732e676f6f676c656164732e76302e636f" .
            "6d6d6f6e2e4b6579776f7264496e666f480012420a09706c6163656d656e" .
            "74181c2001280b322d2e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76302e636f6d6d6f6e2e506c6163656d656e74496e666f480012490a0d" .
            "6c697374696e675f67726f757018202001280b32302e676f6f676c652e61" .
            "64732e676f6f676c656164732e76302e636f6d6d6f6e2e4c697374696e67" .
            "47726f7570496e666f480012410a096167655f72616e676518242001280b" .
            "322c2e676f6f676c652e6164732e676f6f676c656164732e76302e636f6d" .
            "6d6f6e2e41676552616e6765496e666f4800123c0a0667656e6465721825" .
            "2001280b322a2e676f6f676c652e6164732e676f6f676c656164732e7630" .
            "2e636f6d6d6f6e2e47656e646572496e666f480012470a0c696e636f6d65" .
            "5f72616e676518262001280b322f2e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76302e636f6d6d6f6e2e496e636f6d6552616e6765496e66" .
            "6f4800124d0a0f706172656e74616c5f73746174757318272001280b3232" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76302e636f6d6d6f" .
            "6e2e506172656e74616c537461747573496e666f480012410a0975736572" .
            "5f6c697374182a2001280b322c2e676f6f676c652e6164732e676f6f676c" .
            "656164732e76302e636f6d6d6f6e2e557365724c697374496e666f480012" .
            "490a0d796f75747562655f766964656f18282001280b32302e676f6f676c" .
            "652e6164732e676f6f676c656164732e76302e636f6d6d6f6e2e596f7554" .
            "756265566964656f496e666f4800124d0a0f796f75747562655f6368616e" .
            "6e656c18292001280b32322e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76302e636f6d6d6f6e2e596f75547562654368616e6e656c496e66" .
            "6f4800123a0a05746f706963182b2001280b32292e676f6f676c652e6164" .
            "732e676f6f676c656164732e76302e636f6d6d6f6e2e546f706963496e66" .
            "6f480012490a0d757365725f696e746572657374182d2001280b32302e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76302e636f6d6d6f6e2e" .
            "55736572496e746572657374496e666f48001aff020a0b5175616c697479" .
            "496e666f12320a0d7175616c6974795f73636f726518012001280b321b2e" .
            "676f6f676c652e70726f746f6275662e496e74333256616c756512680a16" .
            "63726561746976655f7175616c6974795f73636f726518022001280e3248" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76302e656e756d73" .
            "2e5175616c69747953636f72654275636b6574456e756d2e5175616c6974" .
            "7953636f72654275636b6574126a0a18706f73745f636c69636b5f717561" .
            "6c6974795f73636f726518032001280e32482e676f6f676c652e6164732e" .
            "676f6f676c656164732e76302e656e756d732e5175616c69747953636f72" .
            "654275636b6574456e756d2e5175616c69747953636f72654275636b6574" .
            "12660a147365617263685f7072656469637465645f63747218042001280e" .
            "32482e676f6f676c652e6164732e676f6f676c656164732e76302e656e75" .
            "6d732e5175616c69747953636f72654275636b6574456e756d2e5175616c" .
            "69747953636f72654275636b65741acc010a11506f736974696f6e457374" .
            "696d61746573123a0a1566697273745f706167655f6370635f6d6963726f" .
            "7318012001280b321b2e676f6f676c652e70726f746f6275662e496e7436" .
            "3456616c7565123e0a1966697273745f706f736974696f6e5f6370635f6d" .
            "6963726f7318022001280b321b2e676f6f676c652e70726f746f6275662e" .
            "496e74363456616c7565123b0a16746f705f6f665f706167655f6370635f" .
            "6d6963726f7318032001280b321b2e676f6f676c652e70726f746f627566" .
            "2e496e74363456616c7565420b0a09637269746572696f6e42da010a2563" .
            "6f6d2e676f6f676c652e6164732e676f6f676c656164732e76302e726573" .
            "6f75726365734215416447726f7570437269746572696f6e50726f746f50" .
            "015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f" .
            "676f6f676c65617069732f6164732f676f6f676c656164732f76302f7265" .
            "736f75726365733b7265736f7572636573a20203474141aa0221476f6f67" .
            "6c652e4164732e476f6f676c654164732e56302e5265736f7572636573ca" .
            "0221476f6f676c655c4164735c476f6f676c654164735c56305c5265736f" .
            "7572636573620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
