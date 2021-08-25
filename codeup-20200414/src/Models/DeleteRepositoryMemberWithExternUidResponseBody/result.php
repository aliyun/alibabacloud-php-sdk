<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\DeleteRepositoryMemberWithExternUidResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Codeup用户ID
     *
     * @var int
     */
    public $userId;

    /**
     * @description 资源类型
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createdAt;

    /**
     * @description 权限类型。20-浏览者，30-开发者,40-管理员。
     *
     * @var int
     */
    public $accessLevel;

    /**
     * @description 更新时间
     *
     * @var string
     */
    public $updatedAt;

    /**
     * @description 代码库ID
     *
     * @var int
     */
    public $sourceId;

    /**
     * @description ID
     *
     * @var int
     */
    public $id;
    protected $_name = [
        'userId'      => 'UserId',
        'sourceType'  => 'SourceType',
        'createdAt'   => 'CreatedAt',
        'accessLevel' => 'AccessLevel',
        'updatedAt'   => 'UpdatedAt',
        'sourceId'    => 'SourceId',
        'id'          => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->accessLevel) {
            $res['AccessLevel'] = $this->accessLevel;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['AccessLevel'])) {
            $model->accessLevel = $map['AccessLevel'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
