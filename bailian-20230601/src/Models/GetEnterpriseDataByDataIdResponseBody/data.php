<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models\GetEnterpriseDataByDataIdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $dataName;

    /**
     * @var string
     */
    public $dataSize;

    /**
     * @var string
     */
    public $dataStatus;

    /**
     * @var int
     */
    public $dataStatusCode;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var int
     */
    public $dataTypeCode;

    /**
     * @var string
     */
    public $statusDetail;

    /**
     * @var string
     */
    public $storeType;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $uploadTime;
    protected $_name = [
        'dataId'         => 'DataId',
        'dataName'       => 'DataName',
        'dataSize'       => 'DataSize',
        'dataStatus'     => 'DataStatus',
        'dataStatusCode' => 'DataStatusCode',
        'dataType'       => 'DataType',
        'dataTypeCode'   => 'DataTypeCode',
        'statusDetail'   => 'StatusDetail',
        'storeType'      => 'StoreType',
        'tags'           => 'Tags',
        'uploadTime'     => 'UploadTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->dataName) {
            $res['DataName'] = $this->dataName;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->dataStatus) {
            $res['DataStatus'] = $this->dataStatus;
        }
        if (null !== $this->dataStatusCode) {
            $res['DataStatusCode'] = $this->dataStatusCode;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->dataTypeCode) {
            $res['DataTypeCode'] = $this->dataTypeCode;
        }
        if (null !== $this->statusDetail) {
            $res['StatusDetail'] = $this->statusDetail;
        }
        if (null !== $this->storeType) {
            $res['StoreType'] = $this->storeType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->uploadTime) {
            $res['UploadTime'] = $this->uploadTime;
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
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['DataName'])) {
            $model->dataName = $map['DataName'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['DataStatus'])) {
            $model->dataStatus = $map['DataStatus'];
        }
        if (isset($map['DataStatusCode'])) {
            $model->dataStatusCode = $map['DataStatusCode'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['DataTypeCode'])) {
            $model->dataTypeCode = $map['DataTypeCode'];
        }
        if (isset($map['StatusDetail'])) {
            $model->statusDetail = $map['StatusDetail'];
        }
        if (isset($map['StoreType'])) {
            $model->storeType = $map['StoreType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['UploadTime'])) {
            $model->uploadTime = $map['UploadTime'];
        }

        return $model;
    }
}
