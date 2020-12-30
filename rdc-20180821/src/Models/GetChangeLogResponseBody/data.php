<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821\Models\GetChangeLogResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $oldValue;

    /**
     * @var string
     */
    public $propertyType;

    /**
     * @var string
     */
    public $propertyKey;

    /**
     * @var int
     */
    public $targetId;

    /**
     * @var string
     */
    public $other;

    /**
     * @var string
     */
    public $newValue;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'oldValue'     => 'OldValue',
        'propertyType' => 'PropertyType',
        'propertyKey'  => 'PropertyKey',
        'targetId'     => 'TargetId',
        'other'        => 'Other',
        'newValue'     => 'NewValue',
        'targetType'   => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->oldValue) {
            $res['OldValue'] = $this->oldValue;
        }
        if (null !== $this->propertyType) {
            $res['PropertyType'] = $this->propertyType;
        }
        if (null !== $this->propertyKey) {
            $res['PropertyKey'] = $this->propertyKey;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->other) {
            $res['Other'] = $this->other;
        }
        if (null !== $this->newValue) {
            $res['NewValue'] = $this->newValue;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OldValue'])) {
            $model->oldValue = $map['OldValue'];
        }
        if (isset($map['PropertyType'])) {
            $model->propertyType = $map['PropertyType'];
        }
        if (isset($map['PropertyKey'])) {
            $model->propertyKey = $map['PropertyKey'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['Other'])) {
            $model->other = $map['Other'];
        }
        if (isset($map['NewValue'])) {
            $model->newValue = $map['NewValue'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
