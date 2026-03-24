<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListClusterCheckResultRequest extends Model
{
    /**
     * @var string
     */
    public $checkKey;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $riskLevels;

    /**
     * @var string
     */
    public $sortType;

    /**
     * @var string[]
     */
    public $statuses;
    protected $_name = [
        'checkKey' => 'CheckKey',
        'clusterId' => 'ClusterId',
        'currentPage' => 'CurrentPage',
        'lang' => 'Lang',
        'pageSize' => 'PageSize',
        'riskLevels' => 'RiskLevels',
        'sortType' => 'SortType',
        'statuses' => 'Statuses',
    ];

    public function validate()
    {
        if (\is_array($this->riskLevels)) {
            Model::validateArray($this->riskLevels);
        }
        if (\is_array($this->statuses)) {
            Model::validateArray($this->statuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkKey) {
            $res['CheckKey'] = $this->checkKey;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->riskLevels) {
            if (\is_array($this->riskLevels)) {
                $res['RiskLevels'] = [];
                $n1 = 0;
                foreach ($this->riskLevels as $item1) {
                    $res['RiskLevels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
        }

        if (null !== $this->statuses) {
            if (\is_array($this->statuses)) {
                $res['Statuses'] = [];
                $n1 = 0;
                foreach ($this->statuses as $item1) {
                    $res['Statuses'][$n1] = $item1;
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
        if (isset($map['CheckKey'])) {
            $model->checkKey = $map['CheckKey'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RiskLevels'])) {
            if (!empty($map['RiskLevels'])) {
                $model->riskLevels = [];
                $n1 = 0;
                foreach ($map['RiskLevels'] as $item1) {
                    $model->riskLevels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
        }

        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = [];
                $n1 = 0;
                foreach ($map['Statuses'] as $item1) {
                    $model->statuses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
