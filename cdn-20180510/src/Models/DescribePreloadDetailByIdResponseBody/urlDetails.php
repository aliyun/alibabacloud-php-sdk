<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribePreloadDetailByIdResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribePreloadDetailByIdResponseBody\urlDetails\urls;
use AlibabaCloud\Tea\Model;

class urlDetails extends Model
{
    /**
     * @example 2022-11-23T02:26:56Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example 2022-11-23T02:27:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 100%
     *
     * @var string
     */
    public $process;

    /**
     * @example 0
     *
     * @var string
     */
    public $retCode;

    /**
     * @example Complete
     *
     * @var string
     */
    public $status;

    /**
     * @example 14286878547
     *
     * @var string
     */
    public $taskId;

    /**
     * @var urls[]
     */
    public $urls;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'domain'       => 'Domain',
        'endTime'      => 'EndTime',
        'process'      => 'Process',
        'retCode'      => 'RetCode',
        'status'       => 'Status',
        'taskId'       => 'TaskId',
        'urls'         => 'Urls',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Urls'] = [];
            if (null !== $this->urls && \is_array($this->urls)) {
                $n = 0;
                foreach ($this->urls as $item) {
                    $res['Urls'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return urlDetails
     */
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
                $n           = 0;
                foreach ($map['Urls'] as $item) {
                    $model->urls[$n++] = null !== $item ? urls::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
