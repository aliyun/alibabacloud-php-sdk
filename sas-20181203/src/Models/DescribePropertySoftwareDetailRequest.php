<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribePropertySoftwareDetailRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $extend;

    /**
     * @var int
     */
    public $installTimeEnd;

    /**
     * @var int
     */
    public $installTimeStart;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $softwareVersion;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'extend' => 'Extend',
        'installTimeEnd' => 'InstallTimeEnd',
        'installTimeStart' => 'InstallTimeStart',
        'name' => 'Name',
        'pageSize' => 'PageSize',
        'path' => 'Path',
        'remark' => 'Remark',
        'softwareVersion' => 'SoftwareVersion',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }

        if (null !== $this->installTimeEnd) {
            $res['InstallTimeEnd'] = $this->installTimeEnd;
        }

        if (null !== $this->installTimeStart) {
            $res['InstallTimeStart'] = $this->installTimeStart;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->softwareVersion) {
            $res['SoftwareVersion'] = $this->softwareVersion;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }

        if (isset($map['InstallTimeEnd'])) {
            $model->installTimeEnd = $map['InstallTimeEnd'];
        }

        if (isset($map['InstallTimeStart'])) {
            $model->installTimeStart = $map['InstallTimeStart'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['SoftwareVersion'])) {
            $model->softwareVersion = $map['SoftwareVersion'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
