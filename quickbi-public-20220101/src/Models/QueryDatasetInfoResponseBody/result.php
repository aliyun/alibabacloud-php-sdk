<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetInfoResponseBody;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetInfoResponseBody\result\cubeTableList;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetInfoResponseBody\result\dimensionList;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetInfoResponseBody\result\directory;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetInfoResponseBody\result\measureList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The unique ID of the dataset.
     *
     * @var cubeTableList[]
     */
    public $cubeTableList;

    /**
     * @description The unique ID of the workspace to which the dataset belongs.
     *
     * @example false
     *
     * @var bool
     */
    public $custimzeSql;

    /**
     * @description The type of the data source. Valid values:
     *
     *   mysql
     *   odps
     *   oracle
     *   ... Data source types supported by Quick BI such as
     *
     * @example a201c85c-******
     *
     * @var string
     */
    public $datasetId;

    /**
     * @description The user ID of the dataset owner in the Quick BI.
     *
     * @example opds_40
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description A list of all dimensions in the dataset.
     *
     * @var dimensionList[]
     */
    public $dimensionList;

    /**
     * @description The unique ID of the metric.
     *
     * @var directory
     */
    public $directory;

    /**
     * @description The name of the data source.
     *
     * @example a201c85c-******
     *
     * @var string
     */
    public $dsId;

    /**
     * @description The time when the dataset was last modified.
     *
     * @example odps
     *
     * @var string
     */
    public $dsName;

    /**
     * @description The point in time when the training dataset was created.
     *
     * @example odps
     *
     * @var string
     */
    public $dsType;

    /**
     * @description Indicates whether to customize SQL statements. Valid values:
     *
     *   true
     *   false
     *
     * @example 1629450382000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The information about the dataset.
     *
     * @example 1629450382000
     *
     * @var string
     */
    public $gmtModify;

    /**
     * @description A list of all measures for the dataset.
     *
     * @var measureList[]
     */
    public $measureList;

    /**
     * @description Whether to enable extraction acceleration. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $openOfflineAcceleration;

    /**
     * @description Test Space
     *
     * @example b8494aab26124*****
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description The unique ID of the data source.
     *
     * @example The name of the dataset owner.
     *
     * @var string
     */
    public $ownerName;

    /**
     * @description The name of the training dataset.
     *
     * @example false
     *
     * @var bool
     */
    public $rowLevel;

    /**
     * @description Whether row-level permissions are enabled. Valid values:
     *
     *   true: The VIP Netty channel is enabled.
     *   false: The VIP Netty channel is disabled.
     *
     * @example 420abef4-a79b-4289-b12****
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @description Big Baby
     *
     * @example The name of the workspace in which the dataset resides.
     *
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'cubeTableList' => 'CubeTableList',
        'custimzeSql' => 'CustimzeSql',
        'datasetId' => 'DatasetId',
        'datasetName' => 'DatasetName',
        'dimensionList' => 'DimensionList',
        'directory' => 'Directory',
        'dsId' => 'DsId',
        'dsName' => 'DsName',
        'dsType' => 'DsType',
        'gmtCreate' => 'GmtCreate',
        'gmtModify' => 'GmtModify',
        'measureList' => 'MeasureList',
        'openOfflineAcceleration' => 'OpenOfflineAcceleration',
        'ownerId' => 'OwnerId',
        'ownerName' => 'OwnerName',
        'rowLevel' => 'RowLevel',
        'workspaceId' => 'WorkspaceId',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cubeTableList) {
            $res['CubeTableList'] = [];
            if (null !== $this->cubeTableList && \is_array($this->cubeTableList)) {
                $n = 0;
                foreach ($this->cubeTableList as $item) {
                    $res['CubeTableList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->custimzeSql) {
            $res['CustimzeSql'] = $this->custimzeSql;
        }
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->dimensionList) {
            $res['DimensionList'] = [];
            if (null !== $this->dimensionList && \is_array($this->dimensionList)) {
                $n = 0;
                foreach ($this->dimensionList as $item) {
                    $res['DimensionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->directory) {
            $res['Directory'] = null !== $this->directory ? $this->directory->toMap() : null;
        }
        if (null !== $this->dsId) {
            $res['DsId'] = $this->dsId;
        }
        if (null !== $this->dsName) {
            $res['DsName'] = $this->dsName;
        }
        if (null !== $this->dsType) {
            $res['DsType'] = $this->dsType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }
        if (null !== $this->measureList) {
            $res['MeasureList'] = [];
            if (null !== $this->measureList && \is_array($this->measureList)) {
                $n = 0;
                foreach ($this->measureList as $item) {
                    $res['MeasureList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->openOfflineAcceleration) {
            $res['OpenOfflineAcceleration'] = $this->openOfflineAcceleration;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->rowLevel) {
            $res['RowLevel'] = $this->rowLevel;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }
        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
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
        if (isset($map['CubeTableList'])) {
            if (!empty($map['CubeTableList'])) {
                $model->cubeTableList = [];
                $n = 0;
                foreach ($map['CubeTableList'] as $item) {
                    $model->cubeTableList[$n++] = null !== $item ? cubeTableList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CustimzeSql'])) {
            $model->custimzeSql = $map['CustimzeSql'];
        }
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['DimensionList'])) {
            if (!empty($map['DimensionList'])) {
                $model->dimensionList = [];
                $n = 0;
                foreach ($map['DimensionList'] as $item) {
                    $model->dimensionList[$n++] = null !== $item ? dimensionList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Directory'])) {
            $model->directory = directory::fromMap($map['Directory']);
        }
        if (isset($map['DsId'])) {
            $model->dsId = $map['DsId'];
        }
        if (isset($map['DsName'])) {
            $model->dsName = $map['DsName'];
        }
        if (isset($map['DsType'])) {
            $model->dsType = $map['DsType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }
        if (isset($map['MeasureList'])) {
            if (!empty($map['MeasureList'])) {
                $model->measureList = [];
                $n = 0;
                foreach ($map['MeasureList'] as $item) {
                    $model->measureList[$n++] = null !== $item ? measureList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OpenOfflineAcceleration'])) {
            $model->openOfflineAcceleration = $map['OpenOfflineAcceleration'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['RowLevel'])) {
            $model->rowLevel = $map['RowLevel'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }
        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        return $model;
    }
}
