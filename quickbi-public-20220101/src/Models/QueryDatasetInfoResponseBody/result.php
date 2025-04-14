<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetInfoResponseBody\result\cubeTableList;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetInfoResponseBody\result\dimensionList;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetInfoResponseBody\result\directory;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetInfoResponseBody\result\measureList;

class result extends Model
{
    /**
     * @var cubeTableList[]
     */
    public $cubeTableList;

    /**
     * @var bool
     */
    public $custimzeSql;

    /**
     * @var string
     */
    public $datasetId;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var dimensionList[]
     */
    public $dimensionList;

    /**
     * @var directory
     */
    public $directory;

    /**
     * @var string
     */
    public $dsId;

    /**
     * @var string
     */
    public $dsName;

    /**
     * @var string
     */
    public $dsType;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModify;

    /**
     * @var measureList[]
     */
    public $measureList;

    /**
     * @var bool
     */
    public $openOfflineAcceleration;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var bool
     */
    public $rowLevel;

    /**
     * @var string
     */
    public $workspaceId;

    /**
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

    public function validate()
    {
        if (\is_array($this->cubeTableList)) {
            Model::validateArray($this->cubeTableList);
        }
        if (\is_array($this->dimensionList)) {
            Model::validateArray($this->dimensionList);
        }
        if (null !== $this->directory) {
            $this->directory->validate();
        }
        if (\is_array($this->measureList)) {
            Model::validateArray($this->measureList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cubeTableList) {
            if (\is_array($this->cubeTableList)) {
                $res['CubeTableList'] = [];
                $n1 = 0;
                foreach ($this->cubeTableList as $item1) {
                    $res['CubeTableList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->dimensionList)) {
                $res['DimensionList'] = [];
                $n1 = 0;
                foreach ($this->dimensionList as $item1) {
                    $res['DimensionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->directory) {
            $res['Directory'] = null !== $this->directory ? $this->directory->toArray($noStream) : $this->directory;
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
            if (\is_array($this->measureList)) {
                $res['MeasureList'] = [];
                $n1 = 0;
                foreach ($this->measureList as $item1) {
                    $res['MeasureList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CubeTableList'])) {
            if (!empty($map['CubeTableList'])) {
                $model->cubeTableList = [];
                $n1 = 0;
                foreach ($map['CubeTableList'] as $item1) {
                    $model->cubeTableList[$n1++] = cubeTableList::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['DimensionList'] as $item1) {
                    $model->dimensionList[$n1++] = dimensionList::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['MeasureList'] as $item1) {
                    $model->measureList[$n1++] = measureList::fromMap($item1);
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
