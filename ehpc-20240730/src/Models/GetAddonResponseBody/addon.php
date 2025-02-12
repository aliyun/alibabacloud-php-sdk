<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\GetAddonResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetAddonResponseBody\addon\resourcesSpec;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetAddonResponseBody\addon\servicesSpec;

class addon extends Model
{
    /**
     * @var string
     */
    public $addonId;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $icon;
    /**
     * @var string
     */
    public $installTime;
    /**
     * @var string
     */
    public $label;
    /**
     * @var string
     */
    public $name;
    /**
     * @var resourcesSpec
     */
    public $resourcesSpec;
    /**
     * @var servicesSpec[]
     */
    public $servicesSpec;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'addonId'       => 'AddonId',
        'description'   => 'Description',
        'icon'          => 'Icon',
        'installTime'   => 'InstallTime',
        'label'         => 'Label',
        'name'          => 'Name',
        'resourcesSpec' => 'ResourcesSpec',
        'servicesSpec'  => 'ServicesSpec',
        'status'        => 'Status',
        'version'       => 'Version',
    ];

    public function validate()
    {
        if (null !== $this->resourcesSpec) {
            $this->resourcesSpec->validate();
        }
        if (\is_array($this->servicesSpec)) {
            Model::validateArray($this->servicesSpec);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addonId) {
            $res['AddonId'] = $this->addonId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }

        if (null !== $this->installTime) {
            $res['InstallTime'] = $this->installTime;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->resourcesSpec) {
            $res['ResourcesSpec'] = null !== $this->resourcesSpec ? $this->resourcesSpec->toArray($noStream) : $this->resourcesSpec;
        }

        if (null !== $this->servicesSpec) {
            if (\is_array($this->servicesSpec)) {
                $res['ServicesSpec'] = [];
                $n1                  = 0;
                foreach ($this->servicesSpec as $item1) {
                    $res['ServicesSpec'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AddonId'])) {
            $model->addonId = $map['AddonId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }

        if (isset($map['InstallTime'])) {
            $model->installTime = $map['InstallTime'];
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ResourcesSpec'])) {
            $model->resourcesSpec = resourcesSpec::fromMap($map['ResourcesSpec']);
        }

        if (isset($map['ServicesSpec'])) {
            if (!empty($map['ServicesSpec'])) {
                $model->servicesSpec = [];
                $n1                  = 0;
                foreach ($map['ServicesSpec'] as $item1) {
                    $model->servicesSpec[$n1++] = servicesSpec::fromMap($item1);
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
