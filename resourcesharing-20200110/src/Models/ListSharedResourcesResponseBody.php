<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListSharedResourcesResponseBody\sharedResources;

class ListSharedResourcesResponseBody extends Model
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
     * @var sharedResources[]
     */
    public $sharedResources;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'sharedResources' => 'SharedResources',
    ];

    public function validate()
    {
        if (\is_array($this->sharedResources)) {
            Model::validateArray($this->sharedResources);
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

        if (null !== $this->sharedResources) {
            if (\is_array($this->sharedResources)) {
                $res['SharedResources'] = [];
                $n1 = 0;
                foreach ($this->sharedResources as $item1) {
                    $res['SharedResources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['SharedResources'])) {
            if (!empty($map['SharedResources'])) {
                $model->sharedResources = [];
                $n1 = 0;
                foreach ($map['SharedResources'] as $item1) {
                    $model->sharedResources[$n1] = sharedResources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
