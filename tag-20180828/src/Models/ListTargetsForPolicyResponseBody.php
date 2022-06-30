<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\SDK\Tag\V20180828\Models\ListTargetsForPolicyResponseBody\targets;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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
            $res['Targets'] = [];
            if (null !== $this->targets && \is_array($this->targets)) {
                $n = 0;
                foreach ($this->targets as $item) {
                    $res['Targets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTargetsForPolicyResponseBody
     */
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
                $n              = 0;
                foreach ($map['Targets'] as $item) {
                    $model->targets[$n++] = null !== $item ? targets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
