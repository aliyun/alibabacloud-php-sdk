<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\UpdateAdInsertionResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateAdInsertionResponseBody\config\cdnConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateAdInsertionResponseBody\config\manifestEndpointConfig;
use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @description Indicates whether ad marker passthrough is enabled.
     *
     * @example ON
     *
     * @var string
     */
    public $adMarkerPassthrough;

    /**
     * @description The request URL of ADS.
     *
     * @example http://ads.com/ad1?param1=[palyer_params.p1]
     *
     * @var string
     */
    public $adsUrl;

    /**
     * @description The CDN configurations.
     *
     * @var cdnConfig
     */
    public $cdnConfig;

    /**
     * @description The player parameter variables and aliases.
     *
     * @example { "player_params.p1": { "1": "abc" } }
     *
     * @var string
     */
    public $configAliases;

    /**
     * @description The URL prefix for the source content.
     *
     * @example https://source.com/
     *
     * @var string
     */
    public $contentUrlPrefix;

    /**
     * @description The time when the configuration was created.
     *
     * @example 2024-06-13T08:26:09Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the configuration was last modified.
     *
     * @example 2024-06-13T08:26:09Z
     *
     * @var string
     */
    public $lastModified;

    /**
     * @description The playback endpoint configuration.
     *
     * @var manifestEndpointConfig
     */
    public $manifestEndpointConfig;

    /**
     * @description The name of the ad insertion configuration.
     *
     * @example my_ad
     *
     * @var string
     */
    public $name;

    /**
     * @description The personalization threshold.
     *
     * @example 5
     *
     * @var int
     */
    public $personalizationThreshold;

    /**
     * @description The URL of the slate ad.
     *
     * @example http://storage.com/slate1.mp4
     *
     * @var string
     */
    public $slateAdUrl;
    protected $_name = [
        'adMarkerPassthrough'      => 'AdMarkerPassthrough',
        'adsUrl'                   => 'AdsUrl',
        'cdnConfig'                => 'CdnConfig',
        'configAliases'            => 'ConfigAliases',
        'contentUrlPrefix'         => 'ContentUrlPrefix',
        'createTime'               => 'CreateTime',
        'lastModified'             => 'LastModified',
        'manifestEndpointConfig'   => 'ManifestEndpointConfig',
        'name'                     => 'Name',
        'personalizationThreshold' => 'PersonalizationThreshold',
        'slateAdUrl'               => 'SlateAdUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adMarkerPassthrough) {
            $res['AdMarkerPassthrough'] = $this->adMarkerPassthrough;
        }
        if (null !== $this->adsUrl) {
            $res['AdsUrl'] = $this->adsUrl;
        }
        if (null !== $this->cdnConfig) {
            $res['CdnConfig'] = null !== $this->cdnConfig ? $this->cdnConfig->toMap() : null;
        }
        if (null !== $this->configAliases) {
            $res['ConfigAliases'] = $this->configAliases;
        }
        if (null !== $this->contentUrlPrefix) {
            $res['ContentUrlPrefix'] = $this->contentUrlPrefix;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
        }
        if (null !== $this->manifestEndpointConfig) {
            $res['ManifestEndpointConfig'] = null !== $this->manifestEndpointConfig ? $this->manifestEndpointConfig->toMap() : null;
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
     * @return config
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
        if (isset($map['CdnConfig'])) {
            $model->cdnConfig = cdnConfig::fromMap($map['CdnConfig']);
        }
        if (isset($map['ConfigAliases'])) {
            $model->configAliases = $map['ConfigAliases'];
        }
        if (isset($map['ContentUrlPrefix'])) {
            $model->contentUrlPrefix = $map['ContentUrlPrefix'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
        }
        if (isset($map['ManifestEndpointConfig'])) {
            $model->manifestEndpointConfig = manifestEndpointConfig::fromMap($map['ManifestEndpointConfig']);
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
