<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePortRangeListAssociationsResponseBody\portRangeListAssociations;

class DescribePortRangeListAssociationsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var portRangeListAssociations[]
     */
    public $portRangeListAssociations;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken' => 'NextToken',
        'portRangeListAssociations' => 'PortRangeListAssociations',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->portRangeListAssociations)) {
            Model::validateArray($this->portRangeListAssociations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->portRangeListAssociations) {
            if (\is_array($this->portRangeListAssociations)) {
                $res['PortRangeListAssociations'] = [];
                $n1 = 0;
                foreach ($this->portRangeListAssociations as $item1) {
                    $res['PortRangeListAssociations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['PortRangeListAssociations'])) {
            if (!empty($map['PortRangeListAssociations'])) {
                $model->portRangeListAssociations = [];
                $n1 = 0;
                foreach ($map['PortRangeListAssociations'] as $item1) {
                    $model->portRangeListAssociations[$n1++] = portRangeListAssociations::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
