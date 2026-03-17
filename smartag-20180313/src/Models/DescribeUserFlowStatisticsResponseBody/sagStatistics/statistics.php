<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeUserFlowStatisticsResponseBody\sagStatistics;

use AlibabaCloud\Dara\Model;

class statistics extends Model
{
    /**
     * @var string
     */
    public $totalBytes;

    /**
     * @var string
     */
    public $totalLeaveBytes;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'totalBytes' => 'TotalBytes',
        'totalLeaveBytes' => 'TotalLeaveBytes',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->totalBytes) {
            $res['TotalBytes'] = $this->totalBytes;
        }

        if (null !== $this->totalLeaveBytes) {
            $res['TotalLeaveBytes'] = $this->totalLeaveBytes;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['TotalBytes'])) {
            $model->totalBytes = $map['TotalBytes'];
        }

        if (isset($map['TotalLeaveBytes'])) {
            $model->totalLeaveBytes = $map['TotalLeaveBytes'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
