<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class SendSdkMessageRequest extends Model
{
    /**
     * @var string
     */
    public $data;
    /**
     * @var string
     */
    public $moduleName;
    /**
     * @var string
     */
    public $operationName;
    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'data'          => 'data',
        'moduleName'    => 'moduleName',
        'operationName' => 'operationName',
        'userId'        => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }

        if (null !== $this->moduleName) {
            $res['moduleName'] = $this->moduleName;
        }

        if (null !== $this->operationName) {
            $res['operationName'] = $this->operationName;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }

        if (isset($map['moduleName'])) {
            $model->moduleName = $map['moduleName'];
        }

        if (isset($map['operationName'])) {
            $model->operationName = $map['operationName'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
