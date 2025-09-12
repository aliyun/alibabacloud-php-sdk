<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20220913\Models\SelectComputeTask2ResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\SelectComputeTask2ResponseBody\data\exportOssFileList;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\SelectComputeTask2ResponseBody\data\taskResultList;

class data extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var int
     */
    public $bcId;

    /**
     * @var string
     */
    public $computeOssFileTitle;

    /**
     * @var string
     */
    public $datasetIds;

    /**
     * @var exportOssFileList[]
     */
    public $exportOssFileList;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var int
     */
    public $fileNum;

    /**
     * @var string
     */
    public $hint;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $remarks;

    /**
     * @var string
     */
    public $status;

    /**
     * @var taskResultList[]
     */
    public $taskResultList;
    protected $_name = [
        'appId' => 'appId',
        'bcId' => 'bcId',
        'computeOssFileTitle' => 'computeOssFileTitle',
        'datasetIds' => 'datasetIds',
        'exportOssFileList' => 'exportOssFileList',
        'extInfo' => 'extInfo',
        'fileNum' => 'fileNum',
        'hint' => 'hint',
        'name' => 'name',
        'remarks' => 'remarks',
        'status' => 'status',
        'taskResultList' => 'taskResultList',
    ];

    public function validate()
    {
        if (\is_array($this->exportOssFileList)) {
            Model::validateArray($this->exportOssFileList);
        }
        if (\is_array($this->taskResultList)) {
            Model::validateArray($this->taskResultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->bcId) {
            $res['bcId'] = $this->bcId;
        }

        if (null !== $this->computeOssFileTitle) {
            $res['computeOssFileTitle'] = $this->computeOssFileTitle;
        }

        if (null !== $this->datasetIds) {
            $res['datasetIds'] = $this->datasetIds;
        }

        if (null !== $this->exportOssFileList) {
            if (\is_array($this->exportOssFileList)) {
                $res['exportOssFileList'] = [];
                $n1 = 0;
                foreach ($this->exportOssFileList as $item1) {
                    $res['exportOssFileList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->extInfo) {
            $res['extInfo'] = $this->extInfo;
        }

        if (null !== $this->fileNum) {
            $res['fileNum'] = $this->fileNum;
        }

        if (null !== $this->hint) {
            $res['hint'] = $this->hint;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->remarks) {
            $res['remarks'] = $this->remarks;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskResultList) {
            if (\is_array($this->taskResultList)) {
                $res['taskResultList'] = [];
                $n1 = 0;
                foreach ($this->taskResultList as $item1) {
                    $res['taskResultList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['bcId'])) {
            $model->bcId = $map['bcId'];
        }

        if (isset($map['computeOssFileTitle'])) {
            $model->computeOssFileTitle = $map['computeOssFileTitle'];
        }

        if (isset($map['datasetIds'])) {
            $model->datasetIds = $map['datasetIds'];
        }

        if (isset($map['exportOssFileList'])) {
            if (!empty($map['exportOssFileList'])) {
                $model->exportOssFileList = [];
                $n1 = 0;
                foreach ($map['exportOssFileList'] as $item1) {
                    $model->exportOssFileList[$n1] = exportOssFileList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['extInfo'])) {
            $model->extInfo = $map['extInfo'];
        }

        if (isset($map['fileNum'])) {
            $model->fileNum = $map['fileNum'];
        }

        if (isset($map['hint'])) {
            $model->hint = $map['hint'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['remarks'])) {
            $model->remarks = $map['remarks'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskResultList'])) {
            if (!empty($map['taskResultList'])) {
                $model->taskResultList = [];
                $n1 = 0;
                foreach ($map['taskResultList'] as $item1) {
                    $model->taskResultList[$n1] = taskResultList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
