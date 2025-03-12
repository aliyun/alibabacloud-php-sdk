<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ListLayer7CustomPortsResponseBody\layer7CustomPorts;
use AlibabaCloud\Tea\Model;

class ListLayer7CustomPortsResponseBody extends Model
{
    /**
     * @var layer7CustomPorts[]
     */
    public $layer7CustomPorts;

    /**
     * @example CF33B4C3-196E-4015-AADD-5CAD00057B80
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'layer7CustomPorts' => 'Layer7CustomPorts',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->layer7CustomPorts) {
            $res['Layer7CustomPorts'] = [];
            if (null !== $this->layer7CustomPorts && \is_array($this->layer7CustomPorts)) {
                $n = 0;
                foreach ($this->layer7CustomPorts as $item) {
                    $res['Layer7CustomPorts'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListLayer7CustomPortsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Layer7CustomPorts'])) {
            if (!empty($map['Layer7CustomPorts'])) {
                $model->layer7CustomPorts = [];
                $n                        = 0;
                foreach ($map['Layer7CustomPorts'] as $item) {
                    $model->layer7CustomPorts[$n++] = null !== $item ? layer7CustomPorts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
