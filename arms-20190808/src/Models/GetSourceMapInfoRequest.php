<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class GetSourceMapInfoRequest extends Model
{
    /**
     * @var bool
     */
    public $ascendingSequence;

    /**
     * @var string
     */
    public $edition;

    /**
     * @var string
     */
    public $ID;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $orderField;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'ascendingSequence' => 'AscendingSequence',
        'edition' => 'Edition',
        'ID' => 'ID',
        'keyword' => 'Keyword',
        'orderField' => 'OrderField',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ascendingSequence) {
            $res['AscendingSequence'] = $this->ascendingSequence;
        }

        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }

        if (null !== $this->ID) {
            $res['ID'] = $this->ID;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->orderField) {
            $res['OrderField'] = $this->orderField;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AscendingSequence'])) {
            $model->ascendingSequence = $map['AscendingSequence'];
        }

        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }

        if (isset($map['ID'])) {
            $model->ID = $map['ID'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['OrderField'])) {
            $model->orderField = $map['OrderField'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
