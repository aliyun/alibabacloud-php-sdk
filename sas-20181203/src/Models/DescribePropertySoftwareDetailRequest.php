<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribePropertySoftwareDetailRequest extends Model
{
    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Specifies whether fuzzy search by software name is supported. If you want to use fuzzy search, set the parameter to 1. If you set the parameter to a different value or leave the parameter empty, fuzzy search is not supported.
     *
     * @example 1
     *
     * @var string
     */
    public $extend;

    /**
     * @description The timestamp generated when the software update ends. Unit: milliseconds.
     *
     * @example 1650012695000
     *
     * @var int
     */
    public $installTimeEnd;

    /**
     * @description The timestamp generated when the software update starts. Unit: milliseconds.
     *
     * @example 1649321495000
     *
     * @var int
     */
    public $installTimeStart;

    /**
     * @description The name of the software.
     *
     * @example kernel
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of entries per page. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The installation path of the software.
     *
     * @example /etc/test
     *
     * @var string
     */
    public $path;

    /**
     * @description The name or IP address of the server.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $remark;

    /**
     * @description The version of the software.
     *
     * @example 3.10.0
     *
     * @var string
     */
    public $softwareVersion;

    /**
     * @description The UUID of the server.
     *
     * @example 50d213b4-3a35-427a-b8a5-****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'currentPage'      => 'CurrentPage',
        'extend'           => 'Extend',
        'installTimeEnd'   => 'InstallTimeEnd',
        'installTimeStart' => 'InstallTimeStart',
        'name'             => 'Name',
        'pageSize'         => 'PageSize',
        'path'             => 'Path',
        'remark'           => 'Remark',
        'softwareVersion'  => 'SoftwareVersion',
        'uuid'             => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribePropertySoftwareDetailRequest
     */
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
