<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListUninstallAegisMachinesRequest extends Model
{
    /**
     * @example 4
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example linux
     *
     * @var string
     */
    public $os;

    /**
     * @example 5
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionIdStr;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @example 172.20.XX.XX
     *
     * @var string
     */
    public $remark;

    /**
     * @example 180.113.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @example 0
     *
     * @var int
     */
    public $vendor;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'os'          => 'Os',
        'pageSize'    => 'PageSize',
        'regionIdStr' => 'RegionIdStr',
        'regionNo'    => 'RegionNo',
        'remark'      => 'Remark',
        'sourceIp'    => 'SourceIp',
        'vendor'      => 'Vendor',
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
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionIdStr) {
            $res['RegionIdStr'] = $this->regionIdStr;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUninstallAegisMachinesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionIdStr'])) {
            $model->regionIdStr = $map['RegionIdStr'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
