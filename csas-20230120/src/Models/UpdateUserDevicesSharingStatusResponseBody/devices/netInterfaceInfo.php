<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\UpdateUserDevicesSharingStatusResponseBody\devices;

use AlibabaCloud\Tea\Model;

class netInterfaceInfo extends Model
{
    /**
     * @var string
     */
    public $mac;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'mac' => 'Mac',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return netInterfaceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
