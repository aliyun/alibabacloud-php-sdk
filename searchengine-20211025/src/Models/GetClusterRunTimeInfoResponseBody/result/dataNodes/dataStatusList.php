<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result\dataNodes;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result\dataNodes\dataStatusList\advanceConfigInfo;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result\dataNodes\dataStatusList\indexConfigInfo;
use AlibabaCloud\Tea\Model;

class dataStatusList extends Model
{
    /**
     * @description The information about advanced configurations.
     *
     * @var advanceConfigInfo
     */
    public $advanceConfigInfo;

    /**
     * @description The name of the worker that failed because of a deployment failure.
     *
     * @var string[]
     */
    public $deployFailedWorker;

    /**
     * @description The storage capacity. Unit: GB.
     *
     * @example 2
     *
     * @var int
     */
    public $docSize;

    /**
     * @description The overall progress.
     *
     * @example 100
     *
     * @var int
     */
    public $donePercent;

    /**
     * @description The number of nodes that are configured.
     *
     * @example 100
     *
     * @var int
     */
    public $doneSize;

    /**
     * @description The error message.
     *
     * @example 0A3B1C48006A6C0905F6375F4821EB50
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description The time when the full data was updated.
     *
     * @example " "
     *
     * @var string
     */
    public $fullUpdateTime;

    /**
     * @description The full version.
     *
     * @example 123423
     *
     * @var int
     */
    public $fullVersion;

    /**
     * @description The time when the incremental data was updated.
     *
     * @example ""
     *
     * @var string
     */
    public $incUpdateTime;

    /**
     * @description The incremental version.
     *
     * @example 123423
     *
     * @var int
     */
    public $incVersion;

    /**
     * @description The configuration information of the index.
     *
     * @var indexConfigInfo
     */
    public $indexConfigInfo;

    /**
     * @description The size of the index.
     *
     * @example 100
     *
     * @var int
     */
    public $indexSize;

    /**
     * @description The name of the worker that failed because of insufficient disk space.
     *
     * @var string[]
     */
    public $lackDiskWorker;

    /**
     * @description The name of the worker that failed because of insufficient memory.
     *
     * @var string[]
     */
    public $lackMemWorker;

    /**
     * @description The name of the node.
     *
     * @example ha-cn-c4d2rq7nt04_qrs
     *
     * @var string
     */
    public $name;

    /**
     * @description The total number of nodes that you specify when you create the cluster.
     *
     * @example 1
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'advanceConfigInfo'  => 'advanceConfigInfo',
        'deployFailedWorker' => 'deployFailedWorker',
        'docSize'            => 'docSize',
        'donePercent'        => 'donePercent',
        'doneSize'           => 'doneSize',
        'errorMsg'           => 'errorMsg',
        'fullUpdateTime'     => 'fullUpdateTime',
        'fullVersion'        => 'fullVersion',
        'incUpdateTime'      => 'incUpdateTime',
        'incVersion'         => 'incVersion',
        'indexConfigInfo'    => 'indexConfigInfo',
        'indexSize'          => 'indexSize',
        'lackDiskWorker'     => 'lackDiskWorker',
        'lackMemWorker'      => 'lackMemWorker',
        'name'               => 'name',
        'totalSize'          => 'totalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advanceConfigInfo) {
            $res['advanceConfigInfo'] = null !== $this->advanceConfigInfo ? $this->advanceConfigInfo->toMap() : null;
        }
        if (null !== $this->deployFailedWorker) {
            $res['deployFailedWorker'] = $this->deployFailedWorker;
        }
        if (null !== $this->docSize) {
            $res['docSize'] = $this->docSize;
        }
        if (null !== $this->donePercent) {
            $res['donePercent'] = $this->donePercent;
        }
        if (null !== $this->doneSize) {
            $res['doneSize'] = $this->doneSize;
        }
        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }
        if (null !== $this->fullUpdateTime) {
            $res['fullUpdateTime'] = $this->fullUpdateTime;
        }
        if (null !== $this->fullVersion) {
            $res['fullVersion'] = $this->fullVersion;
        }
        if (null !== $this->incUpdateTime) {
            $res['incUpdateTime'] = $this->incUpdateTime;
        }
        if (null !== $this->incVersion) {
            $res['incVersion'] = $this->incVersion;
        }
        if (null !== $this->indexConfigInfo) {
            $res['indexConfigInfo'] = null !== $this->indexConfigInfo ? $this->indexConfigInfo->toMap() : null;
        }
        if (null !== $this->indexSize) {
            $res['indexSize'] = $this->indexSize;
        }
        if (null !== $this->lackDiskWorker) {
            $res['lackDiskWorker'] = $this->lackDiskWorker;
        }
        if (null !== $this->lackMemWorker) {
            $res['lackMemWorker'] = $this->lackMemWorker;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->totalSize) {
            $res['totalSize'] = $this->totalSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataStatusList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['advanceConfigInfo'])) {
            $model->advanceConfigInfo = advanceConfigInfo::fromMap($map['advanceConfigInfo']);
        }
        if (isset($map['deployFailedWorker'])) {
            if (!empty($map['deployFailedWorker'])) {
                $model->deployFailedWorker = $map['deployFailedWorker'];
            }
        }
        if (isset($map['docSize'])) {
            $model->docSize = $map['docSize'];
        }
        if (isset($map['donePercent'])) {
            $model->donePercent = $map['donePercent'];
        }
        if (isset($map['doneSize'])) {
            $model->doneSize = $map['doneSize'];
        }
        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }
        if (isset($map['fullUpdateTime'])) {
            $model->fullUpdateTime = $map['fullUpdateTime'];
        }
        if (isset($map['fullVersion'])) {
            $model->fullVersion = $map['fullVersion'];
        }
        if (isset($map['incUpdateTime'])) {
            $model->incUpdateTime = $map['incUpdateTime'];
        }
        if (isset($map['incVersion'])) {
            $model->incVersion = $map['incVersion'];
        }
        if (isset($map['indexConfigInfo'])) {
            $model->indexConfigInfo = indexConfigInfo::fromMap($map['indexConfigInfo']);
        }
        if (isset($map['indexSize'])) {
            $model->indexSize = $map['indexSize'];
        }
        if (isset($map['lackDiskWorker'])) {
            if (!empty($map['lackDiskWorker'])) {
                $model->lackDiskWorker = $map['lackDiskWorker'];
            }
        }
        if (isset($map['lackMemWorker'])) {
            if (!empty($map['lackMemWorker'])) {
                $model->lackMemWorker = $map['lackMemWorker'];
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['totalSize'])) {
            $model->totalSize = $map['totalSize'];
        }

        return $model;
    }
}
