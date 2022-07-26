<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models;

use AlibabaCloud\Tea\Model;

class ChangeApplicationInfoRequest extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appTypeList;

    /**
     * @var string
     */
    public $appingList;

    /**
     * @var string
     */
    public $itemCode;
    protected $_name = [
        'aliUid'      => 'AliUid',
        'appId'       => 'AppId',
        'appName'     => 'AppName',
        'appTypeList' => 'AppTypeList',
        'appingList'  => 'AppingList',
        'itemCode'    => 'ItemCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appTypeList) {
            $res['AppTypeList'] = $this->appTypeList;
        }
        if (null !== $this->appingList) {
            $res['AppingList'] = $this->appingList;
        }
        if (null !== $this->itemCode) {
            $res['ItemCode'] = $this->itemCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeApplicationInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppTypeList'])) {
            $model->appTypeList = $map['AppTypeList'];
        }
        if (isset($map['AppingList'])) {
            $model->appingList = $map['AppingList'];
        }
        if (isset($map['ItemCode'])) {
            $model->itemCode = $map['ItemCode'];
        }

        return $model;
    }
}
