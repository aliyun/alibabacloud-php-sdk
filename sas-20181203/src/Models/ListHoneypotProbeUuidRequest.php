<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListHoneypotProbeUuidRequest extends Model
{
    /**
     * @description The ID of the management node.
     *
     * >  You can call the [ListHoneypotNode](~~ListHoneypotNode~~) operation to obtain the ID.
     * @example a882e590-b87b-45a6-87b9-d0a3e5a0****
     *
     * @var string
     */
    public $controlNodeId;

    /**
     * @description The language of the content within the request and the response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The type of the probe. Valid values:
     *
     *   **host_probe**: host probe
     *   **vpc_black_hole_probe**: virtual private cloud (VPC) probe
     *
     * @example host_probe
     *
     * @var string
     */
    public $probeType;
    protected $_name = [
        'controlNodeId' => 'ControlNodeId',
        'lang'          => 'Lang',
        'probeType'     => 'ProbeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->controlNodeId) {
            $res['ControlNodeId'] = $this->controlNodeId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->probeType) {
            $res['ProbeType'] = $this->probeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHoneypotProbeUuidRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ControlNodeId'])) {
            $model->controlNodeId = $map['ControlNodeId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ProbeType'])) {
            $model->probeType = $map['ProbeType'];
        }

        return $model;
    }
}
