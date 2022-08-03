<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListSharedTargetsResponseBody\sharedTargets;
use AlibabaCloud\Tea\Model;

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
        'nextToken'     => 'NextToken',
        'requestId'     => 'RequestId',
        'sharedTargets' => 'SharedTargets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sharedTargets) {
            $res['SharedTargets'] = [];
            if (null !== $this->sharedTargets && \is_array($this->sharedTargets)) {
                $n = 0;
                foreach ($this->sharedTargets as $item) {
                    $res['SharedTargets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSharedTargetsResponseBody
     */
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
                $n                    = 0;
                foreach ($map['SharedTargets'] as $item) {
                    $model->sharedTargets[$n++] = null !== $item ? sharedTargets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
