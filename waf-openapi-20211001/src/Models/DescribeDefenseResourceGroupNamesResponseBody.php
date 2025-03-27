<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DescribeDefenseResourceGroupNamesResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $groupNames;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'groupNames' => 'GroupNames',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->groupNames)) {
            Model::validateArray($this->groupNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupNames) {
            if (\is_array($this->groupNames)) {
                $res['GroupNames'] = [];
                $n1 = 0;
                foreach ($this->groupNames as $item1) {
                    $res['GroupNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['GroupNames'])) {
            if (!empty($map['GroupNames'])) {
                $model->groupNames = [];
                $n1 = 0;
                foreach ($map['GroupNames'] as $item1) {
                    $model->groupNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
