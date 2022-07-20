<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaAuditResultDetailResponseBody;

use AlibabaCloud\Tea\Model;

class auditResultDetails extends Model
{
    /**
     * @var string
     */
    public $adLabel;

    /**
     * @var string
     */
    public $adScore;

    /**
     * @var string
     */
    public $liveLabel;

    /**
     * @var string
     */
    public $liveScore;

    /**
     * @var string
     */
    public $logoLabel;

    /**
     * @var string
     */
    public $logoScore;

    /**
     * @var string
     */
    public $pornLabel;

    /**
     * @var string
     */
    public $pornScore;

    /**
     * @var string
     */
    public $terrorismLabel;

    /**
     * @var string
     */
    public $terrorismScore;

    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'adLabel'        => 'AdLabel',
        'adScore'        => 'AdScore',
        'liveLabel'      => 'LiveLabel',
        'liveScore'      => 'LiveScore',
        'logoLabel'      => 'LogoLabel',
        'logoScore'      => 'LogoScore',
        'pornLabel'      => 'PornLabel',
        'pornScore'      => 'PornScore',
        'terrorismLabel' => 'TerrorismLabel',
        'terrorismScore' => 'TerrorismScore',
        'timestamp'      => 'Timestamp',
        'url'            => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adLabel) {
            $res['AdLabel'] = $this->adLabel;
        }
        if (null !== $this->adScore) {
            $res['AdScore'] = $this->adScore;
        }
        if (null !== $this->liveLabel) {
            $res['LiveLabel'] = $this->liveLabel;
        }
        if (null !== $this->liveScore) {
            $res['LiveScore'] = $this->liveScore;
        }
        if (null !== $this->logoLabel) {
            $res['LogoLabel'] = $this->logoLabel;
        }
        if (null !== $this->logoScore) {
            $res['LogoScore'] = $this->logoScore;
        }
        if (null !== $this->pornLabel) {
            $res['PornLabel'] = $this->pornLabel;
        }
        if (null !== $this->pornScore) {
            $res['PornScore'] = $this->pornScore;
        }
        if (null !== $this->terrorismLabel) {
            $res['TerrorismLabel'] = $this->terrorismLabel;
        }
        if (null !== $this->terrorismScore) {
            $res['TerrorismScore'] = $this->terrorismScore;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return auditResultDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdLabel'])) {
            $model->adLabel = $map['AdLabel'];
        }
        if (isset($map['AdScore'])) {
            $model->adScore = $map['AdScore'];
        }
        if (isset($map['LiveLabel'])) {
            $model->liveLabel = $map['LiveLabel'];
        }
        if (isset($map['LiveScore'])) {
            $model->liveScore = $map['LiveScore'];
        }
        if (isset($map['LogoLabel'])) {
            $model->logoLabel = $map['LogoLabel'];
        }
        if (isset($map['LogoScore'])) {
            $model->logoScore = $map['LogoScore'];
        }
        if (isset($map['PornLabel'])) {
            $model->pornLabel = $map['PornLabel'];
        }
        if (isset($map['PornScore'])) {
            $model->pornScore = $map['PornScore'];
        }
        if (isset($map['TerrorismLabel'])) {
            $model->terrorismLabel = $map['TerrorismLabel'];
        }
        if (isset($map['TerrorismScore'])) {
            $model->terrorismScore = $map['TerrorismScore'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
