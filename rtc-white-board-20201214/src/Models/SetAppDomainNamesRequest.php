<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models;

use AlibabaCloud\Tea\Model;

class SetAppDomainNamesRequest extends Model
{
    /**
     * @description 白板应用唯一标识符
     *
     * @var string
     */
    public $appID;

    /**
     * @description 所有会使用到白板应用的客户网站域名，多个使用英文逗号(,)分隔，最多传10个
     *
     * @var string
     */
    public $appDomainNames;
    protected $_name = [
        'appID'          => 'AppID',
        'appDomainNames' => 'AppDomainNames',
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
        if (null !== $this->appDomainNames) {
            $res['AppDomainNames'] = $this->appDomainNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetAppDomainNamesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppID'])) {
            $model->appID = $map['AppID'];
        }
        if (isset($map['AppDomainNames'])) {
            $model->appDomainNames = $map['AppDomainNames'];
        }

        return $model;
    }
}
