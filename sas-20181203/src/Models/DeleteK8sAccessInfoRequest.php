<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteK8sAccessInfoRequest extends Model
{
    /**
     * @example None
     *
     * @var string
     */
    public $aliyunYundunGatewayApiName;

    /**
     * @example None
     *
     * @var string
     */
    public $aliyunYundunGatewayPopName;

    /**
     * @example None
     *
     * @var string
     */
    public $aliyunYundunGatewayProjectName;

    /**
     * @example 200
     *
     * @var int
     */
    public $id;
    protected $_name = [
        'aliyunYundunGatewayApiName'     => 'AliyunYundunGatewayApiName',
        'aliyunYundunGatewayPopName'     => 'AliyunYundunGatewayPopName',
        'aliyunYundunGatewayProjectName' => 'AliyunYundunGatewayProjectName',
        'id'                             => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunYundunGatewayApiName) {
            $res['AliyunYundunGatewayApiName'] = $this->aliyunYundunGatewayApiName;
        }
        if (null !== $this->aliyunYundunGatewayPopName) {
            $res['AliyunYundunGatewayPopName'] = $this->aliyunYundunGatewayPopName;
        }
        if (null !== $this->aliyunYundunGatewayProjectName) {
            $res['AliyunYundunGatewayProjectName'] = $this->aliyunYundunGatewayProjectName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteK8sAccessInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunYundunGatewayApiName'])) {
            $model->aliyunYundunGatewayApiName = $map['AliyunYundunGatewayApiName'];
        }
        if (isset($map['AliyunYundunGatewayPopName'])) {
            $model->aliyunYundunGatewayPopName = $map['AliyunYundunGatewayPopName'];
        }
        if (isset($map['AliyunYundunGatewayProjectName'])) {
            $model->aliyunYundunGatewayProjectName = $map['AliyunYundunGatewayProjectName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
