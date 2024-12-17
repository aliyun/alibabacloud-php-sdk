<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class SendSdkMessageRequest extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $data;

    /**
     * @example avatar
     *
     * @var string
     */
    public $moduleName;

    /**
     * @example getProject
     *
     * @var string
     */
    public $operationName;

    /**
     * @example 123
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SendSdkMessageRequest
     */
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
