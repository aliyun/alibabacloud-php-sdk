<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreateLakeHouseSpaceRequest extends Model
{
    /**
     * @description The description of the workspace.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the development database. You can call the [ListDatabases](~~141873~~) or [SearchDatabase](~~141876~~) operation to obtain the ID.
     *
     * @example 2435****
     *
     * @var string
     */
    public $devDbId;

    /**
     * @description The type of the database. Valid values:
     *
     *   **14**: AnalyticDB for MySQL
     *   **18**: AnalyticDB for PostgreSQL
     *
     * @example 14
     *
     * @var string
     */
    public $dwDbType;

    /**
     * @description The mode in which the workspace runs. Valid values:
     *
     *   **0**: basic mode. This mode is unavailable.
     *   **1**: standard mode.
     *
     * @example 1
     *
     * @var string
     */
    public $mode;

    /**
     * @description The ID of the production database. You can call the [ListDatabases](~~141873~~) or [SearchDatabase](~~141876~~) operation to obtain the ID.
     *
     * @example 2442****
     *
     * @var string
     */
    public $prodDbId;

    /**
     * @description The configuration of the workspace. Valid values:
     *
     *   **skipManualRunCheck**: No security rule check is required in the trial run phase.
     *   **skipPublishApprove**: No approval is required for publishing and O\&M.
     *
     * @example {\"skipManualRunCheck\":true,\"skipPublishApprove\":true}
     *
     * @var string
     */
    public $spaceConfig;

    /**
     * @description The name of the workspace.
     *
     * @example test_space
     *
     * @var string
     */
    public $spaceName;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](~~198073~~) or [ListUserTenants](~~198074~~) operation to obtain the tenant ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'description' => 'Description',
        'devDbId'     => 'DevDbId',
        'dwDbType'    => 'DwDbType',
        'mode'        => 'Mode',
        'prodDbId'    => 'ProdDbId',
        'spaceConfig' => 'SpaceConfig',
        'spaceName'   => 'SpaceName',
        'tid'         => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->devDbId) {
            $res['DevDbId'] = $this->devDbId;
        }
        if (null !== $this->dwDbType) {
            $res['DwDbType'] = $this->dwDbType;
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
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLakeHouseSpaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DevDbId'])) {
            $model->devDbId = $map['DevDbId'];
        }
        if (isset($map['DwDbType'])) {
            $model->dwDbType = $map['DwDbType'];
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
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
