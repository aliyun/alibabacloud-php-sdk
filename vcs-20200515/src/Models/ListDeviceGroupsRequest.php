<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class ListDeviceGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $deviceCodeList;

    /**
     * @var string
     */
    public $corpIdList;

    /**
     * @var string
     */
    public $name;

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

    /**
     * @var string
     */
    public $group;
    protected $_name = [
        'deviceCodeList' => 'DeviceCodeList',
        'corpIdList'     => 'CorpIdList',
        'name'           => 'Name',
        'isPage'         => 'IsPage',
        'pageNum'        => 'PageNum',
        'pageSize'       => 'PageSize',
        'group'          => 'Group',
    ];

    public function validate()
    {
        Model::validateRequired('isPage', $this->isPage, true);
        Model::validateRequired('pageNum', $this->pageNum, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceCodeList) {
            $res['DeviceCodeList'] = $this->deviceCodeList;
        }
        if (null !== $this->corpIdList) {
            $res['CorpIdList'] = $this->corpIdList;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeviceGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceCodeList'])) {
            $model->deviceCodeList = $map['DeviceCodeList'];
        }
        if (isset($map['CorpIdList'])) {
            $model->corpIdList = $map['CorpIdList'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }

        return $model;
    }
}
