<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models;

use AlibabaCloud\Tea\Model;

class CreateUserWhiteListRequest extends Model
{
    /**
     * @var string
     */
    public $aoneId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var int
     */
    public $limitCount;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $uid;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'aoneId'      => 'AoneId',
        'description' => 'Description',
        'entityId'    => 'EntityId',
        'limitCount'  => 'LimitCount',
        'type'        => 'Type',
        'uid'         => 'Uid',
        'value'       => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aoneId) {
            $res['AoneId'] = $this->aoneId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->limitCount) {
            $res['LimitCount'] = $this->limitCount;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUserWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AoneId'])) {
            $model->aoneId = $map['AoneId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['LimitCount'])) {
            $model->limitCount = $map['LimitCount'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
