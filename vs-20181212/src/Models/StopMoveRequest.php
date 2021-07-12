<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class StopMoveRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $pan;

    /**
     * @var bool
     */
    public $tilt;

    /**
     * @var bool
     */
    public $zoom;

    /**
     * @var string
     */
    public $subProtocol;
    protected $_name = [
        'ownerId'     => 'OwnerId',
        'id'          => 'Id',
        'pan'         => 'Pan',
        'tilt'        => 'Tilt',
        'zoom'        => 'Zoom',
        'subProtocol' => 'SubProtocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->pan) {
            $res['Pan'] = $this->pan;
        }
        if (null !== $this->tilt) {
            $res['Tilt'] = $this->tilt;
        }
        if (null !== $this->zoom) {
            $res['Zoom'] = $this->zoom;
        }
        if (null !== $this->subProtocol) {
            $res['SubProtocol'] = $this->subProtocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopMoveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Pan'])) {
            $model->pan = $map['Pan'];
        }
        if (isset($map['Tilt'])) {
            $model->tilt = $map['Tilt'];
        }
        if (isset($map['Zoom'])) {
            $model->zoom = $map['Zoom'];
        }
        if (isset($map['SubProtocol'])) {
            $model->subProtocol = $map['SubProtocol'];
        }

        return $model;
    }
}
