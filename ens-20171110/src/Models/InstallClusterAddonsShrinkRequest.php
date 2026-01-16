<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class InstallClusterAddonsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $addonsShrink;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'addonsShrink' => 'Addons',
        'clusterId' => 'ClusterId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addonsShrink) {
            $res['Addons'] = $this->addonsShrink;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
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
        if (isset($map['Addons'])) {
            $model->addonsShrink = $map['Addons'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
