<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultDetailResponseBody\mediaAuditResultDetail;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $terrorismScore;

    /**
     * @var string
     */
    public $adLabel;

    /**
     * @var string
     */
    public $pornScore;

    /**
     * @var string
     */
    public $pornLabel;

    /**
     * @var string
     */
    public $liveLabel;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var string
     */
    public $liveScore;

    /**
     * @var string
     */
    public $adScore;

    /**
     * @var string
     */
    public $logoScore;

    /**
     * @var string
     */
    public $logoLabel;

    /**
     * @var string
     */
    public $terrorismLabel;
    protected $_name = [
        'terrorismScore' => 'TerrorismScore',
        'adLabel'        => 'AdLabel',
        'pornScore'      => 'PornScore',
        'pornLabel'      => 'PornLabel',
        'liveLabel'      => 'LiveLabel',
        'url'            => 'Url',
        'timestamp'      => 'Timestamp',
        'liveScore'      => 'LiveScore',
        'adScore'        => 'AdScore',
        'logoScore'      => 'LogoScore',
        'logoLabel'      => 'LogoLabel',
        'terrorismLabel' => 'TerrorismLabel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->terrorismScore) {
            $res['TerrorismScore'] = $this->terrorismScore;
        }
        if (null !== $this->adLabel) {
            $res['AdLabel'] = $this->adLabel;
        }
        if (null !== $this->pornScore) {
            $res['PornScore'] = $this->pornScore;
        }
        if (null !== $this->pornLabel) {
            $res['PornLabel'] = $this->pornLabel;
        }
        if (null !== $this->liveLabel) {
            $res['LiveLabel'] = $this->liveLabel;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->liveScore) {
            $res['LiveScore'] = $this->liveScore;
        }
        if (null !== $this->adScore) {
            $res['AdScore'] = $this->adScore;
        }
        if (null !== $this->logoScore) {
            $res['LogoScore'] = $this->logoScore;
        }
        if (null !== $this->logoLabel) {
            $res['LogoLabel'] = $this->logoLabel;
        }
        if (null !== $this->terrorismLabel) {
            $res['TerrorismLabel'] = $this->terrorismLabel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TerrorismScore'])) {
            $model->terrorismScore = $map['TerrorismScore'];
        }
        if (isset($map['AdLabel'])) {
            $model->adLabel = $map['AdLabel'];
        }
        if (isset($map['PornScore'])) {
            $model->pornScore = $map['PornScore'];
        }
        if (isset($map['PornLabel'])) {
            $model->pornLabel = $map['PornLabel'];
        }
        if (isset($map['LiveLabel'])) {
            $model->liveLabel = $map['LiveLabel'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['LiveScore'])) {
            $model->liveScore = $map['LiveScore'];
        }
        if (isset($map['AdScore'])) {
            $model->adScore = $map['AdScore'];
        }
        if (isset($map['LogoScore'])) {
            $model->logoScore = $map['LogoScore'];
        }
        if (isset($map['LogoLabel'])) {
            $model->logoLabel = $map['LogoLabel'];
        }
        if (isset($map['TerrorismLabel'])) {
            $model->terrorismLabel = $map['TerrorismLabel'];
        }

        return $model;
    }
}
