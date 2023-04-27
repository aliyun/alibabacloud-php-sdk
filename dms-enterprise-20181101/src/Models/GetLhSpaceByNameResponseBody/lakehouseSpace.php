<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetLhSpaceByNameResponseBody;

use AlibabaCloud\Tea\Model;

class lakehouseSpace extends Model
{
    /**
     * @description The description of the workspace.
     *
     * @example 51***
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description The name of the workspace.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example 2435****
     *
     * @var int
     */
    public $devDbId;

    /**
     * @description The ID of the user who creates the workspace.
     *
     * @example 14
     *
     * @var string
     */
    public $dwDbType;

    /**
     * @description The name of the workspace.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @example false
     *
     * @var bool
     */
    public $isDeleted;

    /**
     * @description The workspace for data warehouse development.
     *
     * @example 1
     *
     * @var int
     */
    public $mode;

    /**
     * @example 2442****
     *
     * @var int
     */
    public $prodDbId;

    /**
     * @description The ID of the request.
     *
     * @example {\"skipManualRunCheck\":true,\"skipPublishApprove\":true}
     *
     * @var string
     */
    public $spaceConfig;

    /**
     * @description The ID of the tenant to which the workspace belongs.
     *
     * @example test_space
     *
     * @var string
     */
    public $spaceName;

    /**
     * @description The mode in which the workspace runs. Valid values:
     *
     *   **0**: basic mode
     *   **1**: standard mode
     *
     * @example 3***
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'creatorId'   => 'CreatorId',
        'description' => 'Description',
        'devDbId'     => 'DevDbId',
        'dwDbType'    => 'DwDbType',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->devDbId) {
            $res['DevDbId'] = $this->devDbId;
        }
        if (null !== $this->dwDbType) {
            $res['DwDbType'] = $this->dwDbType;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DevDbId'])) {
            $model->devDbId = $map['DevDbId'];
        }
        if (isset($map['DwDbType'])) {
            $model->dwDbType = $map['DwDbType'];
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
