<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class CsiGetFileInfoResponseBody extends Model
{
    /**
     * @var InvestigationInfo
     */
    public $investigationInfo;

    /**
     * @example https://data.aliyunpds.com/hz22%2F5d5b986facbec311ef844c25954f96821497b383%2F5d5b986f955410dd991646bb87c6b4e899eff525?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'investigationInfo' => 'investigation_info',
        'url'               => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->investigationInfo) {
            $res['investigation_info'] = null !== $this->investigationInfo ? $this->investigationInfo->toMap() : null;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CsiGetFileInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['investigation_info'])) {
            $model->investigationInfo = InvestigationInfo::fromMap($map['investigation_info']);
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
