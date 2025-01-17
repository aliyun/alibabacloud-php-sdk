<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\FindContainerNetworkConnectResponseBody\connects;

use AlibabaCloud\Dara\Model;

class srcContainer extends Model
{
    /**
     * @var string
     */
    public $containerId;
    protected $_name = [
        'containerId' => 'ContainerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }

        return $model;
    }
}
