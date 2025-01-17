<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListK8sAccessInfoRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunYundunGatewayApiName;
    /**
     * @var string
     */
    public $aliyunYundunGatewayPopName;
    /**
     * @var string
     */
    public $aliyunYundunGatewayProjectName;
    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'aliyunYundunGatewayApiName'     => 'AliyunYundunGatewayApiName',
        'aliyunYundunGatewayPopName'     => 'AliyunYundunGatewayPopName',
        'aliyunYundunGatewayProjectName' => 'AliyunYundunGatewayProjectName',
        'lang'                           => 'Lang',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (isset($map['AliyunYundunGatewayApiName'])) {
            $model->aliyunYundunGatewayApiName = $map['AliyunYundunGatewayApiName'];
        }

        if (isset($map['AliyunYundunGatewayPopName'])) {
            $model->aliyunYundunGatewayPopName = $map['AliyunYundunGatewayPopName'];
        }

        if (isset($map['AliyunYundunGatewayProjectName'])) {
            $model->aliyunYundunGatewayProjectName = $map['AliyunYundunGatewayProjectName'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
