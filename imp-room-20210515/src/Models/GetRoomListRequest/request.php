<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Improom\V20210515\Models\GetRoomListRequest;

use AlibabaCloud\Tea\Model;

class request extends Model
{
    /**
     * @description 租户名
     *
     * @var string
     */
    public $domain;

    /**
     * @description 业务类型
     *
     * @var string
     */
    public $bizType;

    /**
     * @description 查询第几页的房间列表
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description 该页面房间数量(最大支持50)
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'domain'   => 'Domain',
        'bizType'  => 'BizType',
        'pageNum'  => 'PageNum',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
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
     * @return request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
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
