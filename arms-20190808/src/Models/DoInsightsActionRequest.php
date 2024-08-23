<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DoInsightsActionRequest extends Model
{
    /**
     * @description The query parameters. Different module types correspond to different query parameters.
     *
     *   QueryTopo
     *
     * }
     *
     *   QueryTopoRed
     *
     * This parameter is required.
     * @example - QueryTopo
     *
     *
     * }
     * @var string
     */
    public $data;

    /**
     * @description The module type. Valid values:
     *
     *   QueryTopo: queries the topology.
     *   QueryTopoRed: queries the red topology metrics, such as the number of requests, response time, and number of errors.
     *
     * This parameter is required.
     * @example QueryTopo
     *
     * @var string
     */
    public $module;
    protected $_name = [
        'data'   => 'Data',
        'module' => 'Module',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DoInsightsActionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }

        return $model;
    }
}
