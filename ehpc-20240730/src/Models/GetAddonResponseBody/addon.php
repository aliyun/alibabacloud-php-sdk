<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\GetAddonResponseBody;

use AlibabaCloud\SDK\EHPC\V20240730\Models\GetAddonResponseBody\addon\resourcesSpec;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetAddonResponseBody\addon\servicesSpec;
use AlibabaCloud\Tea\Model;

class addon extends Model
{
    /**
     * @description The addon ID.
     *
     * This parameter is required.
     * @example Login-1.0-W2g****
     *
     * @var string
     */
    public $addonId;

    /**
     * @description The addon description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The addon icon.
     *
     * @example /assets/icons/your_icon.svg
     *
     * @var string
     */
    public $icon;

    /**
     * @description The time when the addon was installed.
     *
     * @example 2024-08-22 18:11:17
     *
     * @var string
     */
    public $installTime;

    /**
     * @description The addon label.
     *
     * @var string
     */
    public $label;

    /**
     * @description The addon name.
     *
     * This parameter is required.
     * @example Login
     *
     * @var string
     */
    public $name;

    /**
     * @description The resource configurations of the addon.
     *
     * @var resourcesSpec
     */
    public $resourcesSpec;

    /**
     * @description The service configurations of the addon.
     *
     * @var servicesSpec[]
     */
    public $servicesSpec;

    /**
     * @description The addon status.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The addon version.
     *
     * This parameter is required.
     * @example 1.0
     *
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
    }

    public function toMap()
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
            $res['ResourcesSpec'] = null !== $this->resourcesSpec ? $this->resourcesSpec->toMap() : null;
        }
        if (null !== $this->servicesSpec) {
            $res['ServicesSpec'] = [];
            if (null !== $this->servicesSpec && \is_array($this->servicesSpec)) {
                $n = 0;
                foreach ($this->servicesSpec as $item) {
                    $res['ServicesSpec'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return addon
     */
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
                $n                   = 0;
                foreach ($map['ServicesSpec'] as $item) {
                    $model->servicesSpec[$n++] = null !== $item ? servicesSpec::fromMap($item) : $item;
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
