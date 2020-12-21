<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class ListNVRDeviceRequest extends Model
{
    /**
     * @var string
     */
    public $deviceCode;

    /**
     * @var string
     */
    public $corpIdList;

    /**
     * @var int
     */
    public $isPage;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'deviceCode' => 'DeviceCode',
        'corpIdList' => 'CorpIdList',
        'isPage'     => 'IsPage',
        'pageNum'    => 'PageNum',
        'pageSize'   => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceCode) {
            $res['DeviceCode'] = $this->deviceCode;
        }
        if (null !== $this->corpIdList) {
            $res['CorpIdList'] = $this->corpIdList;
        }
        if (null !== $this->isPage) {
            $res['IsPage'] = $this->isPage;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNVRDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceCode'])) {
            $model->deviceCode = $map['DeviceCode'];
        }
        if (isset($map['CorpIdList'])) {
            $model->corpIdList = $map['CorpIdList'];
        }
        if (isset($map['IsPage'])) {
            $model->isPage = $map['IsPage'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
