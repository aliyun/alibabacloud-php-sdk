<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribePropertyProcDetailRequest extends Model
{
    /**
     * @description The timestamp of last data collection. Unit: milliseconds.
     *
     * @example ./8888
     *
     * @var string
     */
    public $cmdline;

    /**
     * @description The timestamp when the process starts. Unit: milliseconds.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The name of the process.
     *
     * @example 1
     *
     * @var string
     */
    public $extend;

    /**
     * @description The startup parameter of the process.
     *
     * @example 8888
     *
     * @var string
     */
    public $name;

    /**
     * @description The name or IP address of the server.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The public IP address of the server.
     *
     * @example 1649587453000
     *
     * @var int
     */
    public $procTimeEnd;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1648809853000
     *
     * @var int
     */
    public $procTimeStart;

    /**
     * @description 1648809853000
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $remark;

    /**
     * @description The permission that is required to run the process.
     *
     * @example root
     *
     * @var string
     */
    public $user;

    /**
     * @description The private IP address of the server.
     *
     * @example 50d213b4-3a35-427a-b8a5-04b0c7e1****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'cmdline'       => 'Cmdline',
        'currentPage'   => 'CurrentPage',
        'extend'        => 'Extend',
        'name'          => 'Name',
        'pageSize'      => 'PageSize',
        'procTimeEnd'   => 'ProcTimeEnd',
        'procTimeStart' => 'ProcTimeStart',
        'remark'        => 'Remark',
        'user'          => 'User',
        'uuid'          => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cmdline) {
            $res['Cmdline'] = $this->cmdline;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->procTimeEnd) {
            $res['ProcTimeEnd'] = $this->procTimeEnd;
        }
        if (null !== $this->procTimeStart) {
            $res['ProcTimeStart'] = $this->procTimeStart;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePropertyProcDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cmdline'])) {
            $model->cmdline = $map['Cmdline'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProcTimeEnd'])) {
            $model->procTimeEnd = $map['ProcTimeEnd'];
        }
        if (isset($map['ProcTimeStart'])) {
            $model->procTimeStart = $map['ProcTimeStart'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
