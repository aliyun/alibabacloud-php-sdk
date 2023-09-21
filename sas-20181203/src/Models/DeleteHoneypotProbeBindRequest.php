<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteHoneypotProbeBindRequest extends Model
{
    /**
     * @example aa20815f-f0f3-4e3b-8e13-55771742****
     *
     * @var string
     */
    public $bindId;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example aa234650-cfcf-4e25-b61f-c58f603f****
     *
     * @var string
     */
    public $probeId;
    protected $_name = [
        'bindId'  => 'BindId',
        'lang'    => 'Lang',
        'probeId' => 'ProbeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindId) {
            $res['BindId'] = $this->bindId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->probeId) {
            $res['ProbeId'] = $this->probeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteHoneypotProbeBindRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindId'])) {
            $model->bindId = $map['BindId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ProbeId'])) {
            $model->probeId = $map['ProbeId'];
        }

        return $model;
    }
}
