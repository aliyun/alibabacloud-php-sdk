<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetUploadFindByProjectIdResponseBody;

use AlibabaCloud\Tea\Model;

class datasetUploadInfoResponseList extends Model
{
    /**
     * @var int
     */
    public $datasetId;

    /**
     * @var string
     */
    public $datasetOssKey;

    /**
     * @var int
     */
    public $datasetUploadId;

    /**
     * @var string
     */
    public $deviceKey;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $gmtCreate;

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
    public $progress;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'datasetId'       => 'DatasetId',
        'datasetOssKey'   => 'DatasetOssKey',
        'datasetUploadId' => 'DatasetUploadId',
        'deviceKey'       => 'DeviceKey',
        'extInfo'         => 'ExtInfo',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'id'              => 'Id',
        'progress'        => 'Progress',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->datasetOssKey) {
            $res['DatasetOssKey'] = $this->datasetOssKey;
        }
        if (null !== $this->datasetUploadId) {
            $res['DatasetUploadId'] = $this->datasetUploadId;
        }
        if (null !== $this->deviceKey) {
            $res['DeviceKey'] = $this->deviceKey;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datasetUploadInfoResponseList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['DatasetOssKey'])) {
            $model->datasetOssKey = $map['DatasetOssKey'];
        }
        if (isset($map['DatasetUploadId'])) {
            $model->datasetUploadId = $map['DatasetUploadId'];
        }
        if (isset($map['DeviceKey'])) {
            $model->deviceKey = $map['DeviceKey'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
