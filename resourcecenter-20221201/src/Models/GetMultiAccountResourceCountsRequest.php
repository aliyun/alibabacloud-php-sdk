<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetMultiAccountResourceCountsRequest\filter;

class GetMultiAccountResourceCountsRequest extends Model
{
    /**
     * @var filter[]
     */
    public $filter;

    /**
     * @var string
     */
    public $groupByKey;

    /**
     * @var string
     */
    public $scope;
    protected $_name = [
        'filter' => 'Filter',
        'groupByKey' => 'GroupByKey',
        'scope' => 'Scope',
    ];

    public function validate()
    {
        if (\is_array($this->filter)) {
            Model::validateArray($this->filter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filter) {
            if (\is_array($this->filter)) {
                $res['Filter'] = [];
                $n1 = 0;
                foreach ($this->filter as $item1) {
                    $res['Filter'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groupByKey) {
            $res['GroupByKey'] = $this->groupByKey;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
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
        if (isset($map['Filter'])) {
            if (!empty($map['Filter'])) {
                $model->filter = [];
                $n1 = 0;
                foreach ($map['Filter'] as $item1) {
                    $model->filter[$n1] = filter::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['GroupByKey'])) {
            $model->groupByKey = $map['GroupByKey'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
