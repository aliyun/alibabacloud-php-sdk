<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class ModifyClusterAddonShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $addonShrink;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $componentName;
    protected $_name = [
        'addonShrink' => 'Addon',
        'clusterId' => 'ClusterId',
        'componentName' => 'ComponentName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addonShrink) {
            $res['Addon'] = $this->addonShrink;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
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
        if (isset($map['Addon'])) {
            $model->addonShrink = $map['Addon'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }

        return $model;
    }
}
