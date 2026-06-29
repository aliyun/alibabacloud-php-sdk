<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Dara\Model;

class OpenDatasetProxyAppendDataRequest extends Model
{
    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var string[][]
     */
    public $dataMeta;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $traceId;

    /**
     * @var string
     */
    public $UUID;
    protected $_name = [
        'bizCode' => 'BizCode',
        'dataMeta' => 'DataMeta',
        'taskId' => 'TaskId',
        'traceId' => 'TraceId',
        'UUID' => 'UUID',
    ];

    public function validate()
    {
        if (\is_array($this->dataMeta)) {
            Model::validateArray($this->dataMeta);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }

        if (null !== $this->dataMeta) {
            if (\is_array($this->dataMeta)) {
                $res['DataMeta'] = [];
                $n1 = 0;
                foreach ($this->dataMeta as $item1) {
                    if (\is_array($item1)) {
                        $res['DataMeta'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['DataMeta'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }

        if (null !== $this->UUID) {
            $res['UUID'] = $this->UUID;
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
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        if (isset($map['DataMeta'])) {
            if (!empty($map['DataMeta'])) {
                $model->dataMeta = [];
                $n1 = 0;
                foreach ($map['DataMeta'] as $item1) {
                    if (!empty($item1)) {
                        $model->dataMeta[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->dataMeta[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        if (isset($map['UUID'])) {
            $model->UUID = $map['UUID'];
        }

        return $model;
    }
}
