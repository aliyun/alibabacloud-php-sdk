<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePortRangeListsResponseBody\portRangeLists;

class DescribePortRangeListsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var portRangeLists[]
     */
    public $portRangeLists;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken' => 'NextToken',
        'portRangeLists' => 'PortRangeLists',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->portRangeLists)) {
            Model::validateArray($this->portRangeLists);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->portRangeLists) {
            if (\is_array($this->portRangeLists)) {
                $res['PortRangeLists'] = [];
                $n1 = 0;
                foreach ($this->portRangeLists as $item1) {
                    $res['PortRangeLists'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PortRangeLists'])) {
            if (!empty($map['PortRangeLists'])) {
                $model->portRangeLists = [];
                $n1 = 0;
                foreach ($map['PortRangeLists'] as $item1) {
                    $model->portRangeLists[$n1] = portRangeLists::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
