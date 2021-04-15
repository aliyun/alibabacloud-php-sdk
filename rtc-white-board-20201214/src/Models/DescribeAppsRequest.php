<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeAppsRequest extends Model
{
    /**
     * @description 白板应用唯一标识符，默认查询所有应用ID
     *
     * @var string
     */
    public $appID;

    /**
     * @description 白板应用状态，默认查询所有状态。（取值：1:启用，2:停用）
     *
     * @var int
     */
    public $appStatus;

    /**
     * @description 第几页，默认查询第1页。
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description 每页显示个数，默认为10。
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'appID'     => 'AppID',
        'appStatus' => 'AppStatus',
        'pageNum'   => 'PageNum',
        'pageSize'  => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appID) {
            $res['AppID'] = $this->appID;
        }
        if (null !== $this->appStatus) {
            $res['AppStatus'] = $this->appStatus;
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
     * @return DescribeAppsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppID'])) {
            $model->appID = $map['AppID'];
        }
        if (isset($map['AppStatus'])) {
            $model->appStatus = $map['AppStatus'];
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
