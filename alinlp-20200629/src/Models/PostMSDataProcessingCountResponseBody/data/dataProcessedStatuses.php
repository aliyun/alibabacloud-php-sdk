<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models\PostMSDataProcessingCountResponseBody\data;

use AlibabaCloud\SDK\Alinlp\V20200629\Models\PostMSDataProcessingCountResponseBody\data\dataProcessedStatuses\errorDataList;
use AlibabaCloud\Tea\Model;

class dataProcessedStatuses extends Model
{
    /**
     * @example "11"
     *
     * @var string
     */
    public $chunkNum;

    /**
     * @example "1"
     *
     * @var string
     */
    public $dataId;

    /**
     * @var errorDataList[]
     */
    public $errorDataList;

    /**
     * @var int[]
     */
    public $opStatus;

    /**
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @example 2023-01-22 18:44:00
     *
     * @var string
     */
    public $versionValue;
    protected $_name = [
        'chunkNum'      => 'ChunkNum',
        'dataId'        => 'DataId',
        'errorDataList' => 'ErrorDataList',
        'opStatus'      => 'OpStatus',
        'status'        => 'Status',
        'versionValue'  => 'VersionValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chunkNum) {
            $res['ChunkNum'] = $this->chunkNum;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->errorDataList) {
            $res['ErrorDataList'] = [];
            if (null !== $this->errorDataList && \is_array($this->errorDataList)) {
                $n = 0;
                foreach ($this->errorDataList as $item) {
                    $res['ErrorDataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->opStatus) {
            $res['OpStatus'] = $this->opStatus;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->versionValue) {
            $res['VersionValue'] = $this->versionValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataProcessedStatuses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChunkNum'])) {
            $model->chunkNum = $map['ChunkNum'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['ErrorDataList'])) {
            if (!empty($map['ErrorDataList'])) {
                $model->errorDataList = [];
                $n                    = 0;
                foreach ($map['ErrorDataList'] as $item) {
                    $model->errorDataList[$n++] = null !== $item ? errorDataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OpStatus'])) {
            $model->opStatus = $map['OpStatus'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VersionValue'])) {
            $model->versionValue = $map['VersionValue'];
        }

        return $model;
    }
}
