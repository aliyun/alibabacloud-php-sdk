<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListSecurityStrategiesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListSecurityStrategiesResponseBody\pagingInfo\securityStrategies;

class pagingInfo extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var securityStrategies[]
     */
    public $securityStrategies;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'securityStrategies' => 'SecurityStrategies',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->securityStrategies)) {
            Model::validateArray($this->securityStrategies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->securityStrategies) {
            if (\is_array($this->securityStrategies)) {
                $res['SecurityStrategies'] = [];
                $n1 = 0;
                foreach ($this->securityStrategies as $item1) {
                    $res['SecurityStrategies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SecurityStrategies'])) {
            if (!empty($map['SecurityStrategies'])) {
                $model->securityStrategies = [];
                $n1 = 0;
                foreach ($map['SecurityStrategies'] as $item1) {
                    $model->securityStrategies[$n1] = securityStrategies::fromMap($item1);
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
