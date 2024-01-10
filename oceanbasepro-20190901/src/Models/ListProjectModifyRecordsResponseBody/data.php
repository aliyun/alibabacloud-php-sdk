<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\databases;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\errorDetail;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\migrationObjectsInfo;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\omsProjectMappingInfo;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\tableEtlList;
use AlibabaCloud\Tea\Model;

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
     * @example 2023-07-13T06:26:15
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 344000005
     *
     * @var int
     */
    public $id;

    /**
     * @example id
     *
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
     * @example PENDING
     *
     * @var string
     */
    public $status;

    /**
     * @example np_598qm***
     *
     * @var string
     */
    public $subProjectId;

    /**
     * @var tableEtlList[]
     */
    public $tableEtlList;

    /**
     * @example INCREASE_OBJECT
     *
     * @var string
     */
    public $type;

    /**
     * @example id
     *
     * @var int
     */
    public $updateRequestId;
    protected $_name = [
        'databases'             => 'Databases',
        'errorDetail'           => 'ErrorDetail',
        'gmtModified'           => 'GmtModified',
        'id'                    => 'Id',
        'mergeRequestId'        => 'MergeRequestId',
        'migrationObjectsInfo'  => 'MigrationObjectsInfo',
        'omsProjectMappingInfo' => 'OmsProjectMappingInfo',
        'status'                => 'Status',
        'subProjectId'          => 'SubProjectId',
        'tableEtlList'          => 'TableEtlList',
        'type'                  => 'Type',
        'updateRequestId'       => 'UpdateRequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databases) {
            $res['Databases'] = [];
            if (null !== $this->databases && \is_array($this->databases)) {
                $n = 0;
                foreach ($this->databases as $item) {
                    $res['Databases'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errorDetail) {
            $res['ErrorDetail'] = null !== $this->errorDetail ? $this->errorDetail->toMap() : null;
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
            $res['MigrationObjectsInfo'] = null !== $this->migrationObjectsInfo ? $this->migrationObjectsInfo->toMap() : null;
        }
        if (null !== $this->omsProjectMappingInfo) {
            $res['OmsProjectMappingInfo'] = null !== $this->omsProjectMappingInfo ? $this->omsProjectMappingInfo->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subProjectId) {
            $res['SubProjectId'] = $this->subProjectId;
        }
        if (null !== $this->tableEtlList) {
            $res['TableEtlList'] = [];
            if (null !== $this->tableEtlList && \is_array($this->tableEtlList)) {
                $n = 0;
                foreach ($this->tableEtlList as $item) {
                    $res['TableEtlList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Databases'])) {
            if (!empty($map['Databases'])) {
                $model->databases = [];
                $n                = 0;
                foreach ($map['Databases'] as $item) {
                    $model->databases[$n++] = null !== $item ? databases::fromMap($item) : $item;
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
                $n                   = 0;
                foreach ($map['TableEtlList'] as $item) {
                    $model->tableEtlList[$n++] = null !== $item ? tableEtlList::fromMap($item) : $item;
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
