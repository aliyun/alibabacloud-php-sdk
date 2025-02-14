<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class AddAdInsertionRequest extends Model
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
     * @var string
     */
    public $cdnAdSegmentUrlPrefix;
    /**
     * @var string
     */
    public $cdnContentSegmentUrlPrefix;
    /**
     * @var string
     */
    public $clientToken;
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
        'adMarkerPassthrough'        => 'AdMarkerPassthrough',
        'adsUrl'                     => 'AdsUrl',
        'cdnAdSegmentUrlPrefix'      => 'CdnAdSegmentUrlPrefix',
        'cdnContentSegmentUrlPrefix' => 'CdnContentSegmentUrlPrefix',
        'clientToken'                => 'ClientToken',
        'configAliases'              => 'ConfigAliases',
        'contentUrlPrefix'           => 'ContentUrlPrefix',
        'name'                       => 'Name',
        'personalizationThreshold'   => 'PersonalizationThreshold',
        'slateAdUrl'                 => 'SlateAdUrl',
    ];

    public function validate()
    {
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

        if (null !== $this->cdnAdSegmentUrlPrefix) {
            $res['CdnAdSegmentUrlPrefix'] = $this->cdnAdSegmentUrlPrefix;
        }

        if (null !== $this->cdnContentSegmentUrlPrefix) {
            $res['CdnContentSegmentUrlPrefix'] = $this->cdnContentSegmentUrlPrefix;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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

        if (isset($map['CdnAdSegmentUrlPrefix'])) {
            $model->cdnAdSegmentUrlPrefix = $map['CdnAdSegmentUrlPrefix'];
        }

        if (isset($map['CdnContentSegmentUrlPrefix'])) {
            $model->cdnContentSegmentUrlPrefix = $map['CdnContentSegmentUrlPrefix'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
