<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\GetBucketLifecycleResponseBody\rule;
use AlibabaCloud\Tea\Model;

class GetBucketLifecycleResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example A2583E8B-B930-4F59-ADC0-0E209A90C46E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The detailed information about the rule.
     *
     * @var rule[]
     */
    public $rule;
    protected $_name = [
        'requestId' => 'RequestId',
        'rule'      => 'Rule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->rule) {
            $res['Rule'] = [];
            if (null !== $this->rule && \is_array($this->rule)) {
                $n = 0;
                foreach ($this->rule as $item) {
                    $res['Rule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBucketLifecycleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Rule'])) {
            if (!empty($map['Rule'])) {
                $model->rule = [];
                $n           = 0;
                foreach ($map['Rule'] as $item) {
                    $model->rule[$n++] = null !== $item ? rule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
