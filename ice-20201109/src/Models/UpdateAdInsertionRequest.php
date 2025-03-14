<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateAdInsertionRequest extends Model
{
    /**
     * @description Specifies whether to enable ad marker passthrough. Default value: OFF.
     *
     * Valid values:
     *
     *   OFF: Disable.
     *   ON: Enable.
     *
     * @example ON
     *
     * @var string
     */
    public $adMarkerPassthrough;

    /**
     * @description The request URL of the ad decision server (ADS). HTTP and HTTPS are supported. The maximum length is 2,048 characters.
     *
     * This parameter is required.
     *
     * @example http://ads.com/ad1?param1=[palyer_params.p1]
     *
     * @var string
     */
    public $adsUrl;

    /**
     * @description The CDN prefix for ad segments. HTTP and HTTPS are supported. The maximum length is 512 characters.
     *
     * @example http://cdn.com/
     *
     * @var string
     */
    public $cdnAdSegmentUrlPrefix;

    /**
     * @description The CDN prefix for content segments. HTTP and HTTPS are supported. The maximum length is 512 characters.
     *
     * @example http://cdn.com/
     *
     * @var string
     */
    public $cdnContentSegmentUrlPrefix;

    /**
     * @description A JSON string that specifies the player parameter variables and aliases. Format: { "player_params.{name}": { "{key}": "{value}" } }. You can add up to 20 player_params.{name} entries. The name field can be up to 150 characters in length. Each player parameter can include up to 50 key-value pairs. A key can be up to 150 characters long, and a value can be up to 500 characters.
     *
     * @example { "player_params.p1": { "1": "abc" } }
     *
     * @var string
     */
    public $configAliases;

    /**
     * @description The URL prefix for the source content. HTTP and HTTPS are supported. The maximum length is 512 characters.
     *
     * This parameter is required.
     *
     * @example https://source.com/
     *
     * @var string
     */
    public $contentUrlPrefix;

    /**
     * @description The configuration name, which cannot be modified.
     *
     * This parameter is required.
     *
     * @example my_ad
     *
     * @var string
     */
    public $name;

    /**
     * @description Specifies the maximum duration of underfilled time allowed in an ad break. Unit: seconds. Default value: 8 seconds.
     *
     * @example 5
     *
     * @var int
     */
    public $personalizationThreshold;

    /**
     * @description The HTTP or HTTPS URL of the slate ad. Only MP4 format is supported. The maximum length is 2,048 characters.
     *
     * @example http://storage.com/slate1.mp4
     *
     * @var string
     */
    public $slateAdUrl;
    protected $_name = [
        'adMarkerPassthrough' => 'AdMarkerPassthrough',
        'adsUrl' => 'AdsUrl',
        'cdnAdSegmentUrlPrefix' => 'CdnAdSegmentUrlPrefix',
        'cdnContentSegmentUrlPrefix' => 'CdnContentSegmentUrlPrefix',
        'configAliases' => 'ConfigAliases',
        'contentUrlPrefix' => 'ContentUrlPrefix',
        'name' => 'Name',
        'personalizationThreshold' => 'PersonalizationThreshold',
        'slateAdUrl' => 'SlateAdUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->adMarkerPassthrough) {
            $res['AdMarkerPassthrough'] = $this->adMarkerPassthrough;
        }
        if (null !== $this->adsUrl) {
            $res['AdsUrl'] = $this->adsUrl;
        }
        if (null !== $this->cdnAdSegmentUrlPrefix) {
            $res['CdnAdSegmentUrlPrefix'] = $this->cdnAdSegmentUrlPrefix;
        }
        if (null !== $this->cdnContentSegmentUrlPrefix) {
            $res['CdnContentSegmentUrlPrefix'] = $this->cdnContentSegmentUrlPrefix;
        }
        if (null !== $this->configAliases) {
            $res['ConfigAliases'] = $this->configAliases;
        }
        if (null !== $this->contentUrlPrefix) {
            $res['ContentUrlPrefix'] = $this->contentUrlPrefix;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->personalizationThreshold) {
            $res['PersonalizationThreshold'] = $this->personalizationThreshold;
        }
        if (null !== $this->slateAdUrl) {
            $res['SlateAdUrl'] = $this->slateAdUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAdInsertionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdMarkerPassthrough'])) {
            $model->adMarkerPassthrough = $map['AdMarkerPassthrough'];
        }
        if (isset($map['AdsUrl'])) {
            $model->adsUrl = $map['AdsUrl'];
        }
        if (isset($map['CdnAdSegmentUrlPrefix'])) {
            $model->cdnAdSegmentUrlPrefix = $map['CdnAdSegmentUrlPrefix'];
        }
        if (isset($map['CdnContentSegmentUrlPrefix'])) {
            $model->cdnContentSegmentUrlPrefix = $map['CdnContentSegmentUrlPrefix'];
        }
        if (isset($map['ConfigAliases'])) {
            $model->configAliases = $map['ConfigAliases'];
        }
        if (isset($map['ContentUrlPrefix'])) {
            $model->contentUrlPrefix = $map['ContentUrlPrefix'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PersonalizationThreshold'])) {
            $model->personalizationThreshold = $map['PersonalizationThreshold'];
        }
        if (isset($map['SlateAdUrl'])) {
            $model->slateAdUrl = $map['SlateAdUrl'];
        }

        return $model;
    }
}
