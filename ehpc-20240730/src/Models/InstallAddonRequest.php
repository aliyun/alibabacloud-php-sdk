<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;

class InstallAddonRequest extends Model
{
    /**
     * @var string
     */
    public $addonName;

    /**
     * @var string
     */
    public $addonVersion;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $resourcesSpec;

    /**
     * @var string
     */
    public $servicesSpec;
    protected $_name = [
        'addonName' => 'AddonName',
        'addonVersion' => 'AddonVersion',
        'clusterId' => 'ClusterId',
        'resourcesSpec' => 'ResourcesSpec',
        'servicesSpec' => 'ServicesSpec',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addonName) {
            $res['AddonName'] = $this->addonName;
        }

        if (null !== $this->addonVersion) {
            $res['AddonVersion'] = $this->addonVersion;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->resourcesSpec) {
            $res['ResourcesSpec'] = $this->resourcesSpec;
        }

        if (null !== $this->servicesSpec) {
            $res['ServicesSpec'] = $this->servicesSpec;
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
        if (isset($map['AddonName'])) {
            $model->addonName = $map['AddonName'];
        }

        if (isset($map['AddonVersion'])) {
            $model->addonVersion = $map['AddonVersion'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ResourcesSpec'])) {
            $model->resourcesSpec = $map['ResourcesSpec'];
        }

        if (isset($map['ServicesSpec'])) {
            $model->servicesSpec = $map['ServicesSpec'];
        }

        return $model;
    }
}
