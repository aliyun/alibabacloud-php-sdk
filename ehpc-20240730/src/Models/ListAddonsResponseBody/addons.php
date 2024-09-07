<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListAddonsResponseBody;

use AlibabaCloud\Tea\Model;

class addons extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example Login-1.0-W4g****
     *
     * @var string
     */
    public $addonId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 2024-08-22 18:11:17
     *
     * @var string
     */
    public $installTime;

    /**
     * @var string
     */
    public $label;

    /**
     * @description This parameter is required.
     *
     * @example Login
     *
     * @var string
     */
    public $name;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description This parameter is required.
     *
     * @example 1.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'addonId'     => 'AddonId',
        'description' => 'Description',
        'installTime' => 'InstallTime',
        'label'       => 'Label',
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
        if (null !== $this->addonId) {
            $res['AddonId'] = $this->addonId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
     * @return addons
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
        if (isset($map['InstallTime'])) {
            $model->installTime = $map['InstallTime'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
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
