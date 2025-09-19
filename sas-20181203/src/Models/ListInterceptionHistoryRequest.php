<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListInterceptionHistoryRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $historyName;

    /**
     * @var int[]
     */
    public $interceptionTypes;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'currentPage' => 'CurrentPage',
        'endTime' => 'EndTime',
        'historyName' => 'HistoryName',
        'interceptionTypes' => 'InterceptionTypes',
        'lang' => 'Lang',
        'pageSize' => 'PageSize',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->interceptionTypes)) {
            Model::validateArray($this->interceptionTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->historyName) {
            $res['HistoryName'] = $this->historyName;
        }

        if (null !== $this->interceptionTypes) {
            if (\is_array($this->interceptionTypes)) {
                $res['InterceptionTypes'] = [];
                $n1 = 0;
                foreach ($this->interceptionTypes as $item1) {
                    $res['InterceptionTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['HistoryName'])) {
            $model->historyName = $map['HistoryName'];
        }

        if (isset($map['InterceptionTypes'])) {
            if (!empty($map['InterceptionTypes'])) {
                $model->interceptionTypes = [];
                $n1 = 0;
                foreach ($map['InterceptionTypes'] as $item1) {
                    $model->interceptionTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
