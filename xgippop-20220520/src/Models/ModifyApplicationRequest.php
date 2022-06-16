<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models;

use AlibabaCloud\SDK\XgipPop\V20220520\Models\ModifyApplicationRequest\appingList;
use AlibabaCloud\Tea\Model;

class ModifyApplicationRequest extends Model
{
    /**
     * @description AliUid
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description AppId
     *
     * @var string
     */
    public $appCode;

    /**
     * @description 应用名称
     *
     * @var string
     */
    public $appName;

    /**
     * @description dynamic（动态业务）/static（静态业务
     *
     * @var string[]
     */
    public $appTypeList;

    /**
     * @description 扩展属性 源域名和源ip信息保存
     *
     * @var appingList[]
     */
    public $appingList;
    protected $_name = [
        'aliUid'      => 'AliUid',
        'appCode'     => 'AppCode',
        'appName'     => 'AppName',
        'appTypeList' => 'AppTypeList',
        'appingList'  => 'AppingList',
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
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appTypeList) {
            $res['AppTypeList'] = $this->appTypeList;
        }
        if (null !== $this->appingList) {
            $res['AppingList'] = [];
            if (null !== $this->appingList && \is_array($this->appingList)) {
                $n = 0;
                foreach ($this->appingList as $item) {
                    $res['AppingList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppTypeList'])) {
            if (!empty($map['AppTypeList'])) {
                $model->appTypeList = $map['AppTypeList'];
            }
        }
        if (isset($map['AppingList'])) {
            if (!empty($map['AppingList'])) {
                $model->appingList = [];
                $n                 = 0;
                foreach ($map['AppingList'] as $item) {
                    $model->appingList[$n++] = null !== $item ? appingList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
