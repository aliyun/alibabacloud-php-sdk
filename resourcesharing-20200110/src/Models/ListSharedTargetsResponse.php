<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListSharedTargetsResponse\sharedTargets;
use AlibabaCloud\Tea\Model;

class ListSharedTargetsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var sharedTargets[]
     */
    public $sharedTargets;
    protected $_name = [
        'requestId'     => 'RequestId',
        'nextToken'     => 'NextToken',
        'sharedTargets' => 'SharedTargets',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('nextToken', $this->nextToken, true);
        Model::validateRequired('sharedTargets', $this->sharedTargets, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
     * @return ListSharedTargetsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
