<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class ContinuousAdjustRequest extends Model
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
     * @var string
     */
    public $iris;

    /**
     * @var string
     */
    public $focus;

    /**
     * @var string
     */
    public $subProtocol;
    protected $_name = [
        'ownerId'     => 'OwnerId',
        'id'          => 'Id',
        'iris'        => 'Iris',
        'focus'       => 'Focus',
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
        if (null !== $this->iris) {
            $res['Iris'] = $this->iris;
        }
        if (null !== $this->focus) {
            $res['Focus'] = $this->focus;
        }
        if (null !== $this->subProtocol) {
            $res['SubProtocol'] = $this->subProtocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ContinuousAdjustRequest
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
        if (isset($map['Iris'])) {
            $model->iris = $map['Iris'];
        }
        if (isset($map['Focus'])) {
            $model->focus = $map['Focus'];
        }
        if (isset($map['SubProtocol'])) {
            $model->subProtocol = $map['SubProtocol'];
        }

        return $model;
    }
}
