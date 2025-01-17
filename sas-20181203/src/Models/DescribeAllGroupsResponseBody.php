<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllGroupsResponseBody\groups;

class DescribeAllGroupsResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;
    /**
     * @var groups[]
     */
    public $groups;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'count'     => 'Count',
        'groups'    => 'Groups',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->groups)) {
            Model::validateArray($this->groups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->groups) {
            if (\is_array($this->groups)) {
                $res['Groups'] = [];
                $n1            = 0;
                foreach ($this->groups as $item1) {
                    $res['Groups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['Groups'])) {
            if (!empty($map['Groups'])) {
                $model->groups = [];
                $n1            = 0;
                foreach ($map['Groups'] as $item1) {
                    $model->groups[$n1++] = groups::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
