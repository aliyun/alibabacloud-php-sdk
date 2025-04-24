<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201001\Models\GetMcpResourceResponseBody\data;

use AlibabaCloud\Dara\Model;

class desktopInfo extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $authCode;

    /**
     * @var string
     */
    public $connectionProperties;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'appId' => 'AppId',
        'authCode' => 'AuthCode',
        'connectionProperties' => 'ConnectionProperties',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->authCode) {
            $res['AuthCode'] = $this->authCode;
        }

        if (null !== $this->connectionProperties) {
            $res['ConnectionProperties'] = $this->connectionProperties;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AuthCode'])) {
            $model->authCode = $map['AuthCode'];
        }

        if (isset($map['ConnectionProperties'])) {
            $model->connectionProperties = $map['ConnectionProperties'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
