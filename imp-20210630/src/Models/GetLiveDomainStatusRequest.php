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
    protected $_name = [
        'appId'          => 'AppId',
        'liveDomainList' => 'LiveDomainList',
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

        return $model;
    }
}
