<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeIPSRulesResponseBody\rules;

class DescribeIPSRulesResponseBody extends Model
{
    /**
     * @var int
     */
    public $dropCount;

    /**
     * @var int
     */
    public $highRiskCount;

    /**
     * @var int
     */
    public $openCount;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var rules[]
     */
    public $rules;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $userDefineCount;
    protected $_name = [
        'dropCount' => 'DropCount',
        'highRiskCount' => 'HighRiskCount',
        'openCount' => 'OpenCount',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'rules' => 'Rules',
        'totalCount' => 'TotalCount',
        'userDefineCount' => 'UserDefineCount',
    ];

    public function validate()
    {
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dropCount) {
            $res['DropCount'] = $this->dropCount;
        }

        if (null !== $this->highRiskCount) {
            $res['HighRiskCount'] = $this->highRiskCount;
        }

        if (null !== $this->openCount) {
            $res['OpenCount'] = $this->openCount;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['Rules'] = [];
                $n1 = 0;
                foreach ($this->rules as $item1) {
                    $res['Rules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->userDefineCount) {
            $res['UserDefineCount'] = $this->userDefineCount;
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
        if (isset($map['DropCount'])) {
            $model->dropCount = $map['DropCount'];
        }

        if (isset($map['HighRiskCount'])) {
            $model->highRiskCount = $map['HighRiskCount'];
        }

        if (isset($map['OpenCount'])) {
            $model->openCount = $map['OpenCount'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n1 = 0;
                foreach ($map['Rules'] as $item1) {
                    $model->rules[$n1] = rules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['UserDefineCount'])) {
            $model->userDefineCount = $map['UserDefineCount'];
        }

        return $model;
    }
}
