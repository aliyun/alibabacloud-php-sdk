<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreatePolicyGroupRequest;

use AlibabaCloud\Tea\Model;

class deviceRedirects extends Model
{
    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $redirectType;
    protected $_name = [
        'deviceType'   => 'DeviceType',
        'redirectType' => 'RedirectType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->redirectType) {
            $res['RedirectType'] = $this->redirectType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceRedirects
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['RedirectType'])) {
            $model->redirectType = $map['RedirectType'];
        }

        return $model;
    }
}
