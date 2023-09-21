<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListHoneypotProbeUuidRequest extends Model
{
    /**
     * @example a882e590-b87b-45a6-87b9-d0a3e5a0****
     *
     * @var string
     */
    public $controlNodeId;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
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
