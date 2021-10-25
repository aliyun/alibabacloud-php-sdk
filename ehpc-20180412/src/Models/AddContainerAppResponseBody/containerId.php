<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\AddContainerAppResponseBody;

use AlibabaCloud\Tea\Model;

class containerId extends Model
{
    /**
     * @var string[]
     */
    public $containerId;
    protected $_name = [
        'containerId' => 'ContainerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerId
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerId'])) {
            if (!empty($map['ContainerId'])) {
                $model->containerId = $map['ContainerId'];
            }
        }

        return $model;
    }
}
