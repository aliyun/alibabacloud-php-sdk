<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class GetLiveDomainStatusShrinkRequest extends Model
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
     * @var string
     */
    public $liveDomainListShrink;
    protected $_name = [
        'appId'                => 'AppId',
        'liveDomainListShrink' => 'LiveDomainList',
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
        if (null !== $this->liveDomainListShrink) {
            $res['LiveDomainList'] = $this->liveDomainListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLiveDomainStatusShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['LiveDomainList'])) {
            $model->liveDomainListShrink = $map['LiveDomainList'];
        }

        return $model;
    }
}
