<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models;

use AlibabaCloud\Tea\Model;

class GetVulItemPageRequest extends Model
{
    /**
     * @example RHSA-2018:3665-Important: NetworkManager security update
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example n
     *
     * @var string
     */
    public $dealed;

    /**
     * @example later
     *
     * @var string
     */
    public $level;

    /**
     * @example oval:com.redhat.rhsa:def:20183665
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example sca
     *
     * @var string
     */
    public $scanType;
    protected $_name = [
        'aliasName'   => 'AliasName',
        'currentPage' => 'CurrentPage',
        'dealed'      => 'Dealed',
        'level'       => 'Level',
        'name'        => 'Name',
        'pageSize'    => 'PageSize',
        'scanType'    => 'ScanType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->scanType) {
            $res['ScanType'] = $this->scanType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVulItemPageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ScanType'])) {
            $model->scanType = $map['ScanType'];
        }

        return $model;
    }
}
