<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeApDevicesResponseBody\apDevices;

use AlibabaCloud\Tea\Model;

class apInfo extends Model
{
    /**
     * @var bool
     */
    public $isActivate;

    /**
     * @var string
     */
    public $mac;

    /**
     * @var string
     */
    public $model;

    /**
     * @var bool
     */
    public $status;
    protected $_name = [
        'isActivate' => 'IsActivate',
        'mac'        => 'Mac',
        'model'      => 'Model',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isActivate) {
            $res['IsActivate'] = $this->isActivate;
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsActivate'])) {
            $model->isActivate = $map['IsActivate'];
        }
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
