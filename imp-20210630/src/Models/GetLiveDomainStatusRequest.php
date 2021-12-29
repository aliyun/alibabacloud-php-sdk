<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class GetLiveDomainStatusRequest extends Model
{
    /**
     * @description 应用唯一标识
     *
     * @var string
     */
    public $appId;

    /**
     * @description 直播域名列表
     *
     * @var string[]
     */
    public $liveDomainList;

    /**
     * @description 直播域名类型，推流域名: push, 拉流域名: pull, 回放域名: palyback
     *
     * @var string
     */
    public $liveDomainType;
    protected $_name = [
        'appId'          => 'AppId',
        'liveDomainList' => 'LiveDomainList',
        'liveDomainType' => 'LiveDomainType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->liveDomainList) {
            $res['LiveDomainList'] = $this->liveDomainList;
        }
        if (null !== $this->liveDomainType) {
            $res['LiveDomainType'] = $this->liveDomainType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLiveDomainStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['LiveDomainList'])) {
            if (!empty($map['LiveDomainList'])) {
                $model->liveDomainList = $map['LiveDomainList'];
            }
        }
        if (isset($map['LiveDomainType'])) {
            $model->liveDomainType = $map['LiveDomainType'];
        }

        return $model;
    }
}
