<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateHoneypotProbeResponseBody;

use AlibabaCloud\Tea\Model;

class honeypotProbe extends Model
{
    /**
     * @example b69e9aa8-2ea8-4c5a-836a-c1fbacff****
     *
     * @var string
     */
    public $probeId;
    protected $_name = [
        'probeId' => 'ProbeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->probeId) {
            $res['ProbeId'] = $this->probeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return honeypotProbe
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProbeId'])) {
            $model->probeId = $map['ProbeId'];
        }

        return $model;
    }
}
