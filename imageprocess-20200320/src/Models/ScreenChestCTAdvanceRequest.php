<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTAdvanceRequest\URLList;
use AlibabaCloud\Tea\Model;

class ScreenChestCTAdvanceRequest extends Model
{
    /**
     * @example DICOM
     *
     * @var string
     */
    public $dataFormat;

    /**
     * @example 4
     *
     * @var int
     */
    public $mask;

    /**
     * @example 7ff51bfe-e73d-11ea-827d-506b4b3f3cf6
     *
     * @var string
     */
    public $orgId;

    /**
     * @example weiyi
     *
     * @var string
     */
    public $orgName;

    /**
     * @var URLList[]
     */
    public $URLList;

    /**
     * @example 0
     *
     * @var int
     */
    public $verbose;
    protected $_name = [
        'dataFormat' => 'DataFormat',
        'mask'       => 'Mask',
        'orgId'      => 'OrgId',
        'orgName'    => 'OrgName',
        'URLList'    => 'URLList',
        'verbose'    => 'Verbose',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }
        if (null !== $this->URLList) {
            $res['URLList'] = [];
            if (null !== $this->URLList && \is_array($this->URLList)) {
                $n = 0;
                foreach ($this->URLList as $item) {
                    $res['URLList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->verbose) {
            $res['Verbose'] = $this->verbose;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScreenChestCTAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }
        if (isset($map['URLList'])) {
            if (!empty($map['URLList'])) {
                $model->URLList = [];
                $n              = 0;
                foreach ($map['URLList'] as $item) {
                    $model->URLList[$n++] = null !== $item ? URLList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Verbose'])) {
            $model->verbose = $map['Verbose'];
        }

        return $model;
    }
}
