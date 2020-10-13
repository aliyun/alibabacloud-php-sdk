<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models\GetTokenListResponse\tokenList;

use AlibabaCloud\Tea\Model;

class token extends Model
{
    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $platformName;

    /**
     * @var string
     */
    public $platformType;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'clientId'     => 'ClientId',
        'resourceId'   => 'ResourceId',
        'platformName' => 'PlatformName',
        'platformType' => 'PlatformType',
        'token'        => 'Token',
        'createdAt'    => 'CreatedAt',
        'updatedAt'    => 'UpdatedAt',
    ];

    public function validate()
    {
        Model::validateRequired('clientId', $this->clientId, true);
        Model::validateRequired('resourceId', $this->resourceId, true);
        Model::validateRequired('platformName', $this->platformName, true);
        Model::validateRequired('platformType', $this->platformType, true);
        Model::validateRequired('token', $this->token, true);
        Model::validateRequired('createdAt', $this->createdAt, true);
        Model::validateRequired('updatedAt', $this->updatedAt, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->platformName) {
            $res['PlatformName'] = $this->platformName;
        }
        if (null !== $this->platformType) {
            $res['PlatformType'] = $this->platformType;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
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
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['PlatformName'])) {
            $model->platformName = $map['PlatformName'];
        }
        if (isset($map['PlatformType'])) {
            $model->platformType = $map['PlatformType'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}
