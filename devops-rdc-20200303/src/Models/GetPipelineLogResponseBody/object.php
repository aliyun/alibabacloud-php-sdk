<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineLogResponseBody;

use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineLogResponseBody\object\buildProcessNodes;
use AlibabaCloud\Tea\Model;

class object extends Model
{
    /**
     * @var string
     */
    public $actionName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $jobId;

    /**
     * @var buildProcessNodes[]
     */
    public $buildProcessNodes;
    protected $_name = [
        'actionName'        => 'ActionName',
        'startTime'         => 'StartTime',
        'jobId'             => 'JobId',
        'buildProcessNodes' => 'BuildProcessNodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionName) {
            $res['ActionName'] = $this->actionName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->buildProcessNodes) {
            $res['BuildProcessNodes'] = [];
            if (null !== $this->buildProcessNodes && \is_array($this->buildProcessNodes)) {
                $n = 0;
                foreach ($this->buildProcessNodes as $item) {
                    $res['BuildProcessNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return object
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionName'])) {
            $model->actionName = $map['ActionName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['BuildProcessNodes'])) {
            if (!empty($map['BuildProcessNodes'])) {
                $model->buildProcessNodes = [];
                $n                        = 0;
                foreach ($map['BuildProcessNodes'] as $item) {
                    $model->buildProcessNodes[$n++] = null !== $item ? buildProcessNodes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
