<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models;

use AlibabaCloud\SDK\XgipPop\V20220520\Models\CreateApplicationInfoRequest\appingList;
use AlibabaCloud\Tea\Model;

class CreateApplicationInfoRequest extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string[]
     */
    public $appTypeList;

    /**
     * @var appingList[]
     */
    public $appingList;

    /**
     * @var string
     */
    public $itemCode;
    protected $_name = [
        'aliUid'      => 'AliUid',
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
        if (null !== $this->itemCode) {
            $res['ItemCode'] = $this->itemCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApplicationInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
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
        if (isset($map['ItemCode'])) {
            $model->itemCode = $map['ItemCode'];
        }

        return $model;
    }
}
