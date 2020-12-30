<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models\GetTokenListResponseBody\tokenList;

use AlibabaCloud\Tea\Model;

class token extends Model
{
    /**
     * @var string
     */
    public $platformName;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $platformType;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $clientId;
    protected $_name = [
        'platformName' => 'PlatformName',
        'token'        => 'Token',
        'platformType' => 'PlatformType',
        'createdAt'    => 'CreatedAt',
        'updatedAt'    => 'UpdatedAt',
        'resourceId'   => 'ResourceId',
        'clientId'     => 'ClientId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->platformName) {
            $res['PlatformName'] = $this->platformName;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->platformType) {
            $res['PlatformType'] = $this->platformType;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return token
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlatformName'])) {
            $model->platformName = $map['PlatformName'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['PlatformType'])) {
            $model->platformType = $map['PlatformType'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        return $model;
    }
}
