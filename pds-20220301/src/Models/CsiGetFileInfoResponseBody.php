<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class CsiGetFileInfoResponseBody extends Model
{
    /**
     * @var InvestigationInfo
     */
    public $investigationInfo;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'investigationInfo' => 'investigation_info',
        'url' => 'url',
    ];

    public function validate()
    {
        if (null !== $this->investigationInfo) {
            $this->investigationInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->investigationInfo) {
            $res['investigation_info'] = null !== $this->investigationInfo ? $this->investigationInfo->toArray($noStream) : $this->investigationInfo;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['investigation_info'])) {
            $model->investigationInfo = InvestigationInfo::fromMap($map['investigation_info']);
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
