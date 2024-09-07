<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListInstalledSoftwaresResponseBody\additionalPackages;

use AlibabaCloud\Tea\Model;

class additionalPackageInfos extends Model
{
    /**
     * @description The category into which the software falls.
     *
     * @example NWP
     *
     * @var string
     */
    public $category;

    /**
     * @description The time when the software was installed.
     *
     * @example 2024-03-05 18:24:08
     *
     * @var string
     */
    public $createTime;

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
     * @description The installation status of the software.
     *
     * Valid values:
     *
     *   Installed
     *   Uninstalled
     *   Installing
     *   Exception
     *
     * @example Installed
     *
     * @var string
     */
    public $status;

    /**
     * @description The software version.
     *
     * @example 2024.1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'category'    => 'Category',
        'createTime'  => 'CreateTime',
        'description' => 'Description',
        'icon'        => 'Icon',
        'name'        => 'Name',
        'status'      => 'Status',
        'version'     => 'Version',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
     * @return additionalPackageInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
