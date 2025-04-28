<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody\DBNodeCategoryList;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody\DBNodeClassList;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody\DBNodeStorageList;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody\engineVersionList;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody\modeList;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody\storageTypeList;

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
     * @var string
     */
    public $requestId;

    /**
     * @var storageTypeList
     */
    public $storageTypeList;
    protected $_name = [
        'DBNodeCategoryList' => 'DBNodeCategoryList',
        'DBNodeClassList' => 'DBNodeClassList',
        'DBNodeStorageList' => 'DBNodeStorageList',
        'engineVersionList' => 'EngineVersionList',
        'modeList' => 'ModeList',
        'requestId' => 'RequestId',
        'storageTypeList' => 'StorageTypeList',
    ];

    public function validate()
    {
        if (null !== $this->DBNodeCategoryList) {
            $this->DBNodeCategoryList->validate();
        }
        if (null !== $this->DBNodeClassList) {
            $this->DBNodeClassList->validate();
        }
        if (null !== $this->DBNodeStorageList) {
            $this->DBNodeStorageList->validate();
        }
        if (null !== $this->engineVersionList) {
            $this->engineVersionList->validate();
        }
        if (null !== $this->modeList) {
            $this->modeList->validate();
        }
        if (null !== $this->storageTypeList) {
            $this->storageTypeList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBNodeCategoryList) {
            $res['DBNodeCategoryList'] = null !== $this->DBNodeCategoryList ? $this->DBNodeCategoryList->toArray($noStream) : $this->DBNodeCategoryList;
        }

        if (null !== $this->DBNodeClassList) {
            $res['DBNodeClassList'] = null !== $this->DBNodeClassList ? $this->DBNodeClassList->toArray($noStream) : $this->DBNodeClassList;
        }

        if (null !== $this->DBNodeStorageList) {
            $res['DBNodeStorageList'] = null !== $this->DBNodeStorageList ? $this->DBNodeStorageList->toArray($noStream) : $this->DBNodeStorageList;
        }

        if (null !== $this->engineVersionList) {
            $res['EngineVersionList'] = null !== $this->engineVersionList ? $this->engineVersionList->toArray($noStream) : $this->engineVersionList;
        }

        if (null !== $this->modeList) {
            $res['ModeList'] = null !== $this->modeList ? $this->modeList->toArray($noStream) : $this->modeList;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->storageTypeList) {
            $res['StorageTypeList'] = null !== $this->storageTypeList ? $this->storageTypeList->toArray($noStream) : $this->storageTypeList;
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
