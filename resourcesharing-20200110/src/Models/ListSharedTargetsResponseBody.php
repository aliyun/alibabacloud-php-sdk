<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListSharedTargetsResponseBody\sharedTargets;

class ListSharedTargetsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sharedTargets[]
     */
    public $sharedTargets;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'sharedTargets' => 'SharedTargets',
    ];

    public function validate()
    {
        if (\is_array($this->sharedTargets)) {
            Model::validateArray($this->sharedTargets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sharedTargets) {
            if (\is_array($this->sharedTargets)) {
                $res['SharedTargets'] = [];
                $n1 = 0;
                foreach ($this->sharedTargets as $item1) {
                    $res['SharedTargets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SharedTargets'])) {
            if (!empty($map['SharedTargets'])) {
                $model->sharedTargets = [];
                $n1 = 0;
                foreach ($map['SharedTargets'] as $item1) {
                    $model->sharedTargets[$n1] = sharedTargets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
