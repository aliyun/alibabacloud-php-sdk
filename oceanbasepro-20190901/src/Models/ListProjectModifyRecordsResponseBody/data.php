<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\databases;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\errorDetail;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\migrationObjectsInfo;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\omsProjectMappingInfo;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\tableEtlList;

class data extends Model
{
    /**
     * @var databases[]
     */
    public $databases;

    /**
     * @var errorDetail
     */
    public $errorDetail;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $mergeRequestId;

    /**
     * @var migrationObjectsInfo
     */
    public $migrationObjectsInfo;

    /**
     * @var omsProjectMappingInfo
     */
    public $omsProjectMappingInfo;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subProjectId;

    /**
     * @var tableEtlList[]
     */
    public $tableEtlList;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $updateRequestId;
    protected $_name = [
        'databases' => 'Databases',
        'errorDetail' => 'ErrorDetail',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'mergeRequestId' => 'MergeRequestId',
        'migrationObjectsInfo' => 'MigrationObjectsInfo',
        'omsProjectMappingInfo' => 'OmsProjectMappingInfo',
        'status' => 'Status',
        'subProjectId' => 'SubProjectId',
        'tableEtlList' => 'TableEtlList',
        'type' => 'Type',
        'updateRequestId' => 'UpdateRequestId',
    ];

    public function validate()
    {
        if (\is_array($this->databases)) {
            Model::validateArray($this->databases);
        }
        if (null !== $this->errorDetail) {
            $this->errorDetail->validate();
        }
        if (null !== $this->migrationObjectsInfo) {
            $this->migrationObjectsInfo->validate();
        }
        if (null !== $this->omsProjectMappingInfo) {
            $this->omsProjectMappingInfo->validate();
        }
        if (\is_array($this->tableEtlList)) {
            Model::validateArray($this->tableEtlList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databases) {
            if (\is_array($this->databases)) {
                $res['Databases'] = [];
                $n1 = 0;
                foreach ($this->databases as $item1) {
                    $res['Databases'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->errorDetail) {
            $res['ErrorDetail'] = null !== $this->errorDetail ? $this->errorDetail->toArray($noStream) : $this->errorDetail;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->mergeRequestId) {
            $res['MergeRequestId'] = $this->mergeRequestId;
        }

        if (null !== $this->migrationObjectsInfo) {
            $res['MigrationObjectsInfo'] = null !== $this->migrationObjectsInfo ? $this->migrationObjectsInfo->toArray($noStream) : $this->migrationObjectsInfo;
        }

        if (null !== $this->omsProjectMappingInfo) {
            $res['OmsProjectMappingInfo'] = null !== $this->omsProjectMappingInfo ? $this->omsProjectMappingInfo->toArray($noStream) : $this->omsProjectMappingInfo;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subProjectId) {
            $res['SubProjectId'] = $this->subProjectId;
        }

        if (null !== $this->tableEtlList) {
            if (\is_array($this->tableEtlList)) {
                $res['TableEtlList'] = [];
                $n1 = 0;
                foreach ($this->tableEtlList as $item1) {
                    $res['TableEtlList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->updateRequestId) {
            $res['UpdateRequestId'] = $this->updateRequestId;
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
        if (isset($map['Databases'])) {
            if (!empty($map['Databases'])) {
                $model->databases = [];
                $n1 = 0;
                foreach ($map['Databases'] as $item1) {
                    $model->databases[$n1++] = databases::fromMap($item1);
                }
            }
        }

        if (isset($map['ErrorDetail'])) {
            $model->errorDetail = errorDetail::fromMap($map['ErrorDetail']);
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MergeRequestId'])) {
            $model->mergeRequestId = $map['MergeRequestId'];
        }

        if (isset($map['MigrationObjectsInfo'])) {
            $model->migrationObjectsInfo = migrationObjectsInfo::fromMap($map['MigrationObjectsInfo']);
        }

        if (isset($map['OmsProjectMappingInfo'])) {
            $model->omsProjectMappingInfo = omsProjectMappingInfo::fromMap($map['OmsProjectMappingInfo']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubProjectId'])) {
            $model->subProjectId = $map['SubProjectId'];
        }

        if (isset($map['TableEtlList'])) {
            if (!empty($map['TableEtlList'])) {
                $model->tableEtlList = [];
                $n1 = 0;
                foreach ($map['TableEtlList'] as $item1) {
                    $model->tableEtlList[$n1++] = tableEtlList::fromMap($item1);
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UpdateRequestId'])) {
            $model->updateRequestId = $map['UpdateRequestId'];
        }

        return $model;
    }
}
