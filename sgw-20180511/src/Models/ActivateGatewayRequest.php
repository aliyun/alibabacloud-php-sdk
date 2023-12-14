<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class ActivateGatewayRequest extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @example 28c07861-a93b-4aa2-ae3a-3f7b7e7f6184
     *
     * @var string
     */
    public $clientUUID;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @example xxxxxxxxxxxxxxxx
     *
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'category'      => 'Category',
        'clientUUID'    => 'ClientUUID',
        'model'         => 'Model',
        'securityToken' => 'SecurityToken',
        'serialNumber'  => 'SerialNumber',
        'token'         => 'Token',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->clientUUID) {
            $res['ClientUUID'] = $this->clientUUID;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ActivateGatewayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ClientUUID'])) {
            $model->clientUUID = $map['ClientUUID'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
