<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kvcachestore\V20260617\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\AttachKVCacheStoreResponseBody\attachResults;

class AttachKVCacheStoreResponseBody extends Model
{
    /**
     * @var attachResults[]
     */
    public $attachResults;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'attachResults' => 'AttachResults',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->attachResults)) {
            Model::validateArray($this->attachResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachResults) {
            if (\is_array($this->attachResults)) {
                $res['AttachResults'] = [];
                $n1 = 0;
                foreach ($this->attachResults as $item1) {
                    $res['AttachResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AttachResults'])) {
            if (!empty($map['AttachResults'])) {
                $model->attachResults = [];
                $n1 = 0;
                foreach ($map['AttachResults'] as $item1) {
                    $model->attachResults[$n1] = attachResults::fromMap($item1);
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
