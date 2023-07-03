<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20191111\Models;

use AlibabaCloud\Tea\Model;

class FindUserReport4AlinlpRequest extends Model
{
    /**
     * @var string
     */
    public $beginTime;

    /**
     * @var int
     */
    public $customerUserParentId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'beginTime'            => 'BeginTime',
        'customerUserParentId' => 'CustomerUserParentId',
        'endTime'              => 'EndTime',
        'modelType'            => 'ModelType',
        'type'                 => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->customerUserParentId) {
            $res['CustomerUserParentId'] = $this->customerUserParentId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindUserReport4AlinlpRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['CustomerUserParentId'])) {
            $model->customerUserParentId = $map['CustomerUserParentId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
