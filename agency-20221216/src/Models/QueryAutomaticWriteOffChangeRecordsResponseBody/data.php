<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\QueryAutomaticWriteOffChangeRecordsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $changeContent;

    /**
     * @var string
     */
    public $operateId;

    /**
     * @var string
     */
    public $operateSource;

    /**
     * @var string
     */
    public $operationTime;
    protected $_name = [
        'changeContent' => 'ChangeContent',
        'operateId' => 'OperateId',
        'operateSource' => 'OperateSource',
        'operationTime' => 'OperationTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeContent) {
            $res['ChangeContent'] = $this->changeContent;
        }

        if (null !== $this->operateId) {
            $res['OperateId'] = $this->operateId;
        }

        if (null !== $this->operateSource) {
            $res['OperateSource'] = $this->operateSource;
        }

        if (null !== $this->operationTime) {
            $res['OperationTime'] = $this->operationTime;
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
        if (isset($map['ChangeContent'])) {
            $model->changeContent = $map['ChangeContent'];
        }

        if (isset($map['OperateId'])) {
            $model->operateId = $map['OperateId'];
        }

        if (isset($map['OperateSource'])) {
            $model->operateSource = $map['OperateSource'];
        }

        if (isset($map['OperationTime'])) {
            $model->operationTime = $map['OperationTime'];
        }

        return $model;
    }
}
