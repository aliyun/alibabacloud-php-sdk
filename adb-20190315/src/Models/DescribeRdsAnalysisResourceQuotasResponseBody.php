<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody\DBNodeCategoryList;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody\DBNodeClassList;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody\DBNodeStorageList;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody\engineVersionList;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody\modeList;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody\storageTypeList;
use AlibabaCloud\Tea\Model;

class DescribeRdsAnalysisResourceQuotasResponseBody extends Model
{
    /**
     * @var DBNodeCategoryList
     */
    public $DBNodeCategoryList;

    /**
     * @var DBNodeClassList
     */
    public $DBNodeClassList;

    /**
     * @var DBNodeStorageList
     */
    public $DBNodeStorageList;

    /**
     * @var engineVersionList
     */
    public $engineVersionList;

    /**
     * @var modeList
     */
    public $modeList;

    /**
     * @example 1A31D7FA-1826-5843-8807-D2F715E70CB0
     *
     * @var string
     */
    public $requestId;

    /**
     * @var storageTypeList
     */
    public $storageTypeList;
    protected $_name = [
        'DBNodeCategoryList' => 'DBNodeCategoryList',
        'DBNodeClassList'    => 'DBNodeClassList',
        'DBNodeStorageList'  => 'DBNodeStorageList',
        'engineVersionList'  => 'EngineVersionList',
        'modeList'           => 'ModeList',
        'requestId'          => 'RequestId',
        'storageTypeList'    => 'StorageTypeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBNodeCategoryList) {
            $res['DBNodeCategoryList'] = null !== $this->DBNodeCategoryList ? $this->DBNodeCategoryList->toMap() : null;
        }
        if (null !== $this->DBNodeClassList) {
            $res['DBNodeClassList'] = null !== $this->DBNodeClassList ? $this->DBNodeClassList->toMap() : null;
        }
        if (null !== $this->DBNodeStorageList) {
            $res['DBNodeStorageList'] = null !== $this->DBNodeStorageList ? $this->DBNodeStorageList->toMap() : null;
        }
        if (null !== $this->engineVersionList) {
            $res['EngineVersionList'] = null !== $this->engineVersionList ? $this->engineVersionList->toMap() : null;
        }
        if (null !== $this->modeList) {
            $res['ModeList'] = null !== $this->modeList ? $this->modeList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->storageTypeList) {
            $res['StorageTypeList'] = null !== $this->storageTypeList ? $this->storageTypeList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRdsAnalysisResourceQuotasResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBNodeCategoryList'])) {
            $model->DBNodeCategoryList = DBNodeCategoryList::fromMap($map['DBNodeCategoryList']);
        }
        if (isset($map['DBNodeClassList'])) {
            $model->DBNodeClassList = DBNodeClassList::fromMap($map['DBNodeClassList']);
        }
        if (isset($map['DBNodeStorageList'])) {
            $model->DBNodeStorageList = DBNodeStorageList::fromMap($map['DBNodeStorageList']);
        }
        if (isset($map['EngineVersionList'])) {
            $model->engineVersionList = engineVersionList::fromMap($map['EngineVersionList']);
        }
        if (isset($map['ModeList'])) {
            $model->modeList = modeList::fromMap($map['ModeList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StorageTypeList'])) {
            $model->storageTypeList = storageTypeList::fromMap($map['StorageTypeList']);
        }

        return $model;
    }
}
