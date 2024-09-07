<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListSoftwaresResponseBody\additionalPackages;

use AlibabaCloud\SDK\EHPC\V20240730\Models\ListSoftwaresResponseBody\additionalPackages\additionalPackageInfos\versions;
use AlibabaCloud\Tea\Model;

class additionalPackageInfos extends Model
{
    /**
     * @description The application category.
     *
     * @example NWP
     *
     * @var string
     */
    public $category;

    /**
     * @description The software description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The URL of the software icon.
     *
     * @example https://gw.alicdn.com/imgextra/i2/O1CN01FIkxZ81LmE0fvrAyR_!!6000000001341-55-tps-6349-1603.svg
     *
     * @var string
     */
    public $icon;

    /**
     * @description The software name.
     *
     * @example gromacs
     *
     * @var string
     */
    public $name;

    /**
     * @description The information about the software versions that can be installed in the cluster.
     *
     * @var versions
     */
    public $versions;
    protected $_name = [
        'category'    => 'Category',
        'description' => 'Description',
        'icon'        => 'Icon',
        'name'        => 'Name',
        'versions'    => 'Versions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->versions) {
            $res['Versions'] = null !== $this->versions ? $this->versions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return additionalPackageInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Versions'])) {
            $model->versions = versions::fromMap($map['Versions']);
        }

        return $model;
    }
}
