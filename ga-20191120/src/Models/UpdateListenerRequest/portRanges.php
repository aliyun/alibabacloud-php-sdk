<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\UpdateListenerRequest;

use AlibabaCloud\Tea\Model;

class portRanges extends Model
{
    /**
     * @description The start port of the listener port range that is used to receive and forward requests to endpoints.
     *
     * Valid values: **1** to **65499**. The **FromPort** value must be smaller than or equal to the **ToPort** value.
     *
     * >  You can configure only one listener port for an HTTP or HTTPS listener. In this case, the start port is the same as the end port.
     * @example 20
     *
     * @var int
     */
    public $fromPort;

    /**
     * @description The end port of the listener port range that is used to receive and forward requests to endpoints.
     *
     * Valid values: **1** to **65499**. The **FromPort** value must be smaller than or equal to the **ToPort** value.
     *
     * >  You can configure only one listener port for an HTTP or HTTPS listener. In this case, the start port is the same as the end port.
     * @example 21
     *
     * @var int
     */
    public $toPort;
    protected $_name = [
        'fromPort' => 'FromPort',
        'toPort'   => 'ToPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromPort) {
            $res['FromPort'] = $this->fromPort;
        }
        if (null !== $this->toPort) {
            $res['ToPort'] = $this->toPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return portRanges
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FromPort'])) {
            $model->fromPort = $map['FromPort'];
        }
        if (isset($map['ToPort'])) {
            $model->toPort = $map['ToPort'];
        }

        return $model;
    }
}
