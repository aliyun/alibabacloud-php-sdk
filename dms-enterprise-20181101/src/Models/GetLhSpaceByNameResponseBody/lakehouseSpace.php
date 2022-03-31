<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetLhSpaceByNameResponseBody;

use AlibabaCloud\Tea\Model;

class lakehouseSpace extends Model
{
    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $devDbId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isDeleted;

    /**
     * @var int
     */
    public $mode;

    /**
     * @var int
     */
    public $prodDbId;

    /**
     * @var string
     */
    public $spaceConfig;

    /**
     * @var string
     */
    public $spaceName;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'creatorId'   => 'CreatorId',
        'dbType'      => 'DbType',
        'description' => 'Description',
        'devDbId'     => 'DevDbId',
        'id'          => 'Id',
        'isDeleted'   => 'IsDeleted',
        'mode'        => 'Mode',
        'prodDbId'    => 'ProdDbId',
        'spaceConfig' => 'SpaceConfig',
        'spaceName'   => 'SpaceName',
        'tenantId'    => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->devDbId) {
            $res['DevDbId'] = $this->devDbId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isDeleted) {
            $res['IsDeleted'] = $this->isDeleted;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->prodDbId) {
            $res['ProdDbId'] = $this->prodDbId;
        }
        if (null !== $this->spaceConfig) {
            $res['SpaceConfig'] = $this->spaceConfig;
        }
        if (null !== $this->spaceName) {
            $res['SpaceName'] = $this->spaceName;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lakehouseSpace
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DevDbId'])) {
            $model->devDbId = $map['DevDbId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsDeleted'])) {
            $model->isDeleted = $map['IsDeleted'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['ProdDbId'])) {
            $model->prodDbId = $map['ProdDbId'];
        }
        if (isset($map['SpaceConfig'])) {
            $model->spaceConfig = $map['SpaceConfig'];
        }
        if (isset($map['SpaceName'])) {
            $model->spaceName = $map['SpaceName'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
