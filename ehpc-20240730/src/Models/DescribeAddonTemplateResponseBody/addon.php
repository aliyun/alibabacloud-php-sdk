<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\DescribeAddonTemplateResponseBody;

use AlibabaCloud\SDK\EHPC\V20240730\Models\DescribeAddonTemplateResponseBody\addon\resourcesSpec;
use AlibabaCloud\SDK\EHPC\V20240730\Models\DescribeAddonTemplateResponseBody\addon\servicesSpec;
use AlibabaCloud\Tea\Model;

class addon extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example /assets/icons/your_icon.svg
     *
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $label;

    /**
     * @example 2024-08-22 18:11:17
     *
     * @var string
     */
    public $lastUpdate;

    /**
     * @description This parameter is required.
     *
     * @example Login
     *
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
     * @description This parameter is required.
     *
     * @example 1.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'description'   => 'Description',
        'icon'          => 'Icon',
        'label'         => 'Label',
        'lastUpdate'    => 'LastUpdate',
        'name'          => 'Name',
        'resourcesSpec' => 'ResourcesSpec',
        'servicesSpec'  => 'ServicesSpec',
        'version'       => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->lastUpdate) {
            $res['LastUpdate'] = $this->lastUpdate;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['LastUpdate'])) {
            $model->lastUpdate = $map['LastUpdate'];
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
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
