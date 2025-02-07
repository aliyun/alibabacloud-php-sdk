<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class UpdateUserDeliveryTaskRequest extends Model
{
    /**
     * @var string
     */
    public $businessType;
    /**
     * @var string
     */
    public $details;
    /**
     * @var float
     */
    public $discardRate;
    /**
     * @var string
     */
    public $fieldName;
    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'businessType' => 'BusinessType',
        'details'      => 'Details',
        'discardRate'  => 'DiscardRate',
        'fieldName'    => 'FieldName',
        'taskName'     => 'TaskName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->details) {
            $res['Details'] = $this->details;
        }

        if (null !== $this->discardRate) {
            $res['DiscardRate'] = $this->discardRate;
        }

        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['Details'])) {
            $model->details = $map['Details'];
        }

        if (isset($map['DiscardRate'])) {
            $model->discardRate = $map['DiscardRate'];
        }

        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
