<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListUserWafRulesetsResponseBody\rulesets;

class ListUserWafRulesetsResponseBody extends Model
{
    /**
     * @var int
     */
    public $instanceUsage;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var rulesets[]
     */
    public $rulesets;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'instanceUsage' => 'InstanceUsage',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'rulesets' => 'Rulesets',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->rulesets)) {
            Model::validateArray($this->rulesets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceUsage) {
            $res['InstanceUsage'] = $this->instanceUsage;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->rulesets) {
            if (\is_array($this->rulesets)) {
                $res['Rulesets'] = [];
                $n1 = 0;
                foreach ($this->rulesets as $item1) {
                    $res['Rulesets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['InstanceUsage'])) {
            $model->instanceUsage = $map['InstanceUsage'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Rulesets'])) {
            if (!empty($map['Rulesets'])) {
                $model->rulesets = [];
                $n1 = 0;
                foreach ($map['Rulesets'] as $item1) {
                    $model->rulesets[$n1] = rulesets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
