<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ListLayer7CustomPortsResponse\layer7CustomPorts;
use AlibabaCloud\Tea\Model;

class ListLayer7CustomPortsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var layer7CustomPorts[]
     */
    public $layer7CustomPorts;
    protected $_name = [
        'requestId'         => 'RequestId',
        'layer7CustomPorts' => 'Layer7CustomPorts',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('layer7CustomPorts', $this->layer7CustomPorts, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->layer7CustomPorts) {
            $res['Layer7CustomPorts'] = [];
            if (null !== $this->layer7CustomPorts && \is_array($this->layer7CustomPorts)) {
                $n = 0;
                foreach ($this->layer7CustomPorts as $item) {
                    $res['Layer7CustomPorts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLayer7CustomPortsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Layer7CustomPorts'])) {
            if (!empty($map['Layer7CustomPorts'])) {
                $model->layer7CustomPorts = [];
                $n                        = 0;
                foreach ($map['Layer7CustomPorts'] as $item) {
                    $model->layer7CustomPorts[$n++] = null !== $item ? layer7CustomPorts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
