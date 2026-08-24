<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kvcachestore\V20260617\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\DetachKVCacheStoreResponseBody\detachResults;

class DetachKVCacheStoreResponseBody extends Model
{
    /**
     * @var detachResults[]
     */
    public $detachResults;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'detachResults' => 'DetachResults',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->detachResults)) {
            Model::validateArray($this->detachResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detachResults) {
            if (\is_array($this->detachResults)) {
                $res['DetachResults'] = [];
                $n1 = 0;
                foreach ($this->detachResults as $item1) {
                    $res['DetachResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DetachResults'])) {
            if (!empty($map['DetachResults'])) {
                $model->detachResults = [];
                $n1 = 0;
                foreach ($map['DetachResults'] as $item1) {
                    $model->detachResults[$n1] = detachResults::fromMap($item1);
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
