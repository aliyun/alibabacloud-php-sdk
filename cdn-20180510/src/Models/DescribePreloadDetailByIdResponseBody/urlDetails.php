<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribePreloadDetailByIdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribePreloadDetailByIdResponseBody\urlDetails\urls;

class urlDetails extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $process;

    /**
     * @var string
     */
    public $retCode;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var urls[]
     */
    public $urls;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'domain' => 'Domain',
        'endTime' => 'EndTime',
        'process' => 'Process',
        'retCode' => 'RetCode',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'urls' => 'Urls',
    ];

    public function validate()
    {
        if (\is_array($this->urls)) {
            Model::validateArray($this->urls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->process) {
            $res['Process'] = $this->process;
        }

        if (null !== $this->retCode) {
            $res['RetCode'] = $this->retCode;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->urls) {
            if (\is_array($this->urls)) {
                $res['Urls'] = [];
                $n1 = 0;
                foreach ($this->urls as $item1) {
                    $res['Urls'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Process'])) {
            $model->process = $map['Process'];
        }

        if (isset($map['RetCode'])) {
            $model->retCode = $map['RetCode'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['Urls'])) {
            if (!empty($map['Urls'])) {
                $model->urls = [];
                $n1 = 0;
                foreach ($map['Urls'] as $item1) {
                    $model->urls[$n1] = urls::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
