<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagPortListResponseBody;

use AlibabaCloud\Tea\Model;

class ports extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $portName;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $mac;
    protected $_name = [
        'status'   => 'Status',
        'portName' => 'PortName',
        'role'     => 'Role',
        'mac'      => 'Mac',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->portName) {
            $res['PortName'] = $this->portName;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ports
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PortName'])) {
            $model->portName = $map['PortName'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }

        return $model;
    }
}
