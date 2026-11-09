<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryWildcardByTopicResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $limit;

    /**
     * @var string
     */
    public $total;

    /**
     * @var string[]
     */
    public $wildcardList;
    protected $_name = [
        'limit' => 'Limit',
        'total' => 'Total',
        'wildcardList' => 'WildcardList',
    ];

    public function validate()
    {
        if (\is_array($this->wildcardList)) {
            Model::validateArray($this->wildcardList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        if (null !== $this->wildcardList) {
            if (\is_array($this->wildcardList)) {
                $res['WildcardList'] = [];
                $n1 = 0;
                foreach ($this->wildcardList as $item1) {
                    $res['WildcardList'][$n1] = $item1;
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
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        if (isset($map['WildcardList'])) {
            if (!empty($map['WildcardList'])) {
                $model->wildcardList = [];
                $n1 = 0;
                foreach ($map['WildcardList'] as $item1) {
                    $model->wildcardList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
