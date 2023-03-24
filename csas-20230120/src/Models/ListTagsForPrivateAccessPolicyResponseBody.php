<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListTagsForPrivateAccessPolicyResponseBody\polices;
use AlibabaCloud\Tea\Model;

class ListTagsForPrivateAccessPolicyResponseBody extends Model
{
    /**
     * @var polices[]
     */
    public $polices;

    /**
     * @example 9EE61139-A6A8-5E13-80AF-83435C21B26B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'polices'   => 'Polices',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->polices) {
            $res['Polices'] = [];
            if (null !== $this->polices && \is_array($this->polices)) {
                $n = 0;
                foreach ($this->polices as $item) {
                    $res['Polices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagsForPrivateAccessPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Polices'])) {
            if (!empty($map['Polices'])) {
                $model->polices = [];
                $n              = 0;
                foreach ($map['Polices'] as $item) {
                    $model->polices[$n++] = null !== $item ? polices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
