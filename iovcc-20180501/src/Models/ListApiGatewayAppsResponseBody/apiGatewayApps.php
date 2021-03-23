<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListApiGatewayAppsResponseBody;

use AlibabaCloud\Tea\Model;

class apiGatewayApps extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $gatewayAppKey;

    /**
     * @var string
     */
    public $gatewayAppSecret;

    /**
     * @var string
     */
    public $gatewayAppId;
    protected $_name = [
        'id'               => 'Id',
        'projectId'        => 'ProjectId',
        'userId'           => 'UserId',
        'status'           => 'Status',
        'gmtCreate'        => 'GmtCreate',
        'gmtModified'      => 'GmtModified',
        'gatewayAppKey'    => 'GatewayAppKey',
        'gatewayAppSecret' => 'GatewayAppSecret',
        'gatewayAppId'     => 'GatewayAppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->gatewayAppKey) {
            $res['GatewayAppKey'] = $this->gatewayAppKey;
        }
        if (null !== $this->gatewayAppSecret) {
            $res['GatewayAppSecret'] = $this->gatewayAppSecret;
        }
        if (null !== $this->gatewayAppId) {
            $res['GatewayAppId'] = $this->gatewayAppId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiGatewayApps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GatewayAppKey'])) {
            $model->gatewayAppKey = $map['GatewayAppKey'];
        }
        if (isset($map['GatewayAppSecret'])) {
            $model->gatewayAppSecret = $map['GatewayAppSecret'];
        }
        if (isset($map['GatewayAppId'])) {
            $model->gatewayAppId = $map['GatewayAppId'];
        }

        return $model;
    }
}
