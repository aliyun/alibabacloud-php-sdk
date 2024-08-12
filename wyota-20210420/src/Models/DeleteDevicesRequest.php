<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class DeleteDevicesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $force;

    /**
     * @var string
     */
    public $serialNos;

    /**
     * @var string
     */
    public $uuids;
    protected $_name = [
        'force'     => 'Force',
        'serialNos' => 'SerialNos',
        'uuids'     => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->serialNos) {
            $res['SerialNos'] = $this->serialNos;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['SerialNos'])) {
            $model->serialNos = $map['SerialNos'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
