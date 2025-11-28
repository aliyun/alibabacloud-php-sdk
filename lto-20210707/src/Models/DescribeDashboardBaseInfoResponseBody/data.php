<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\DescribeDashboardBaseInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $apiInvokeCount;

    /**
     * @var int
     */
    public $bizChainCount;

    /**
     * @var int
     */
    public $deviceCount;

    /**
     * @var int
     */
    public $memberCount;
    protected $_name = [
        'apiInvokeCount' => 'ApiInvokeCount',
        'bizChainCount' => 'BizChainCount',
        'deviceCount' => 'DeviceCount',
        'memberCount' => 'MemberCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiInvokeCount) {
            $res['ApiInvokeCount'] = $this->apiInvokeCount;
        }

        if (null !== $this->bizChainCount) {
            $res['BizChainCount'] = $this->bizChainCount;
        }

        if (null !== $this->deviceCount) {
            $res['DeviceCount'] = $this->deviceCount;
        }

        if (null !== $this->memberCount) {
            $res['MemberCount'] = $this->memberCount;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiInvokeCount'])) {
            $model->apiInvokeCount = $map['ApiInvokeCount'];
        }

        if (isset($map['BizChainCount'])) {
            $model->bizChainCount = $map['BizChainCount'];
        }

        if (isset($map['DeviceCount'])) {
            $model->deviceCount = $map['DeviceCount'];
        }

        if (isset($map['MemberCount'])) {
            $model->memberCount = $map['MemberCount'];
        }

        return $model;
    }
}
