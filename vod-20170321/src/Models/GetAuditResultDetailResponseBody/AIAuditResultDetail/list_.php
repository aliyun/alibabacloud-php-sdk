<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAuditResultDetailResponseBody\AIAuditResultDetail;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $index;

    /**
     * @var string
     */
    public $object;

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
    protected $_name = [
        'index' => 'Index',
        'object' => 'Object',
        'pornLabel' => 'PornLabel',
        'pornScore' => 'PornScore',
        'terrorismLabel' => 'TerrorismLabel',
        'terrorismScore' => 'TerrorismScore',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->object) {
            $res['Object'] = $this->object;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['Object'])) {
            $model->object = $map['Object'];
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

        return $model;
    }
}
