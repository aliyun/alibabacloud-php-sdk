<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result\dataNodes;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result\dataNodes\dataStatusList\advanceConfigInfo;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result\dataNodes\dataStatusList\indexConfigInfo;
use AlibabaCloud\Tea\Model;

class dataStatusList extends Model
{
    /**
     * @var advanceConfigInfo
     */
    public $advanceConfigInfo;

    /**
     * @var string[]
     */
    public $deployFailedWorker;

    /**
     * @var int
     */
    public $docSize;

    /**
     * @var int
     */
    public $donePercent;

    /**
     * @var int
     */
    public $doneSize;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $fullUpdateTime;

    /**
     * @var int
     */
    public $fullVersion;

    /**
     * @var string
     */
    public $incUpdateTime;

    /**
     * @var int
     */
    public $incVersion;

    /**
     * @var indexConfigInfo
     */
    public $indexConfigInfo;

    /**
     * @var int
     */
    public $indexSize;

    /**
     * @var string[]
     */
    public $lackDiskWorker;

    /**
     * @var string[]
     */
    public $lackMemWorker;

    /**
     * @var string
     */
    public $name;

    /**
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
