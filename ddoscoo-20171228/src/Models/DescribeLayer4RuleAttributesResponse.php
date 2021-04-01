<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RuleAttributesResponse\listeners;
use AlibabaCloud\Tea\Model;

class DescribeLayer4RuleAttributesResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var listeners[]
     */
    public $listeners;
    protected $_name = [
        'requestId' => 'RequestId',
        'listeners' => 'Listeners',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('listeners', $this->listeners, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->listeners) {
            $res['Listeners'] = [];
            if (null !== $this->listeners && \is_array($this->listeners)) {
                $n = 0;
                foreach ($this->listeners as $item) {
                    $res['Listeners'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLayer4RuleAttributesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Listeners'])) {
            if (!empty($map['Listeners'])) {
                $model->listeners = [];
                $n                = 0;
                foreach ($map['Listeners'] as $item) {
                    $model->listeners[$n++] = null !== $item ? listeners::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
