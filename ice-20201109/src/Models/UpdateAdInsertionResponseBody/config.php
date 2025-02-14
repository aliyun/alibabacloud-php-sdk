<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\UpdateAdInsertionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateAdInsertionResponseBody\config\cdnConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateAdInsertionResponseBody\config\manifestEndpointConfig;

class config extends Model
{
    /**
     * @var string
     */
    public $adMarkerPassthrough;
    /**
     * @var string
     */
    public $adsUrl;
    /**
     * @var cdnConfig
     */
    public $cdnConfig;
    /**
     * @var string
     */
    public $configAliases;
    /**
     * @var string
     */
    public $contentUrlPrefix;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $lastModified;
    /**
     * @var manifestEndpointConfig
     */
    public $manifestEndpointConfig;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $personalizationThreshold;
    /**
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
        if (null !== $this->cdnConfig) {
            $this->cdnConfig->validate();
        }
        if (null !== $this->manifestEndpointConfig) {
            $this->manifestEndpointConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adMarkerPassthrough) {
            $res['AdMarkerPassthrough'] = $this->adMarkerPassthrough;
        }

        if (null !== $this->adsUrl) {
            $res['AdsUrl'] = $this->adsUrl;
        }

        if (null !== $this->cdnConfig) {
            $res['CdnConfig'] = null !== $this->cdnConfig ? $this->cdnConfig->toArray($noStream) : $this->cdnConfig;
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
            $res['ManifestEndpointConfig'] = null !== $this->manifestEndpointConfig ? $this->manifestEndpointConfig->toArray($noStream) : $this->manifestEndpointConfig;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
