<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\BatchJobSubmitResponseBody;

use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\BatchJobSubmitResponseBody\data\configList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example xxxx_folder_xxxx
     *
     * @var string
     */
    public $configId;

    /**
     * @var configList[]
     */
    public $configList;

    /**
     * @example BATCH_JOB_XXXXXX
     *
     * @var string
     */
    public $submitId;

    /**
     * @example 20
     *
     * @var int
     */
    public $taskCount;
    protected $_name = [
        'configId'   => 'ConfigId',
        'configList' => 'ConfigList',
        'submitId'   => 'SubmitId',
        'taskCount'  => 'TaskCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->configList) {
            $res['ConfigList'] = [];
            if (null !== $this->configList && \is_array($this->configList)) {
                $n = 0;
                foreach ($this->configList as $item) {
                    $res['ConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->submitId) {
            $res['SubmitId'] = $this->submitId;
        }
        if (null !== $this->taskCount) {
            $res['TaskCount'] = $this->taskCount;
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
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['ConfigList'])) {
            if (!empty($map['ConfigList'])) {
                $model->configList = [];
                $n                 = 0;
                foreach ($map['ConfigList'] as $item) {
                    $model->configList[$n++] = null !== $item ? configList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SubmitId'])) {
            $model->submitId = $map['SubmitId'];
        }
        if (isset($map['TaskCount'])) {
            $model->taskCount = $map['TaskCount'];
        }

        return $model;
    }
}
