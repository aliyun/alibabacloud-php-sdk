<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListTargetsForPolicyResponseBody\targets;

class ListTargetsForPolicyResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isRd;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $rdId;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var targets[]
     */
    public $targets;
    protected $_name = [
        'isRd'      => 'IsRd',
        'nextToken' => 'NextToken',
        'rdId'      => 'RdId',
        'requestId' => 'RequestId',
        'targets'   => 'Targets',
    ];

    public function validate()
    {
        if (\is_array($this->targets)) {
            Model::validateArray($this->targets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isRd) {
            $res['IsRd'] = $this->isRd;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->rdId) {
            $res['RdId'] = $this->rdId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->targets) {
            if (\is_array($this->targets)) {
                $res['Targets'] = [];
                $n1             = 0;
                foreach ($this->targets as $item1) {
                    $res['Targets'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['IsRd'])) {
            $model->isRd = $map['IsRd'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RdId'])) {
            $model->rdId = $map['RdId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Targets'])) {
            if (!empty($map['Targets'])) {
                $model->targets = [];
                $n1             = 0;
                foreach ($map['Targets'] as $item1) {
                    $model->targets[$n1++] = targets::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
