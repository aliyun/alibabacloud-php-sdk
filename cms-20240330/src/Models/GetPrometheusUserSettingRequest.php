<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class GetPrometheusUserSettingRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunLang;
    protected $_name = [
        'aliyunLang' => 'aliyunLang',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunLang) {
            $res['aliyunLang'] = $this->aliyunLang;
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
        if (isset($map['aliyunLang'])) {
            $model->aliyunLang = $map['aliyunLang'];
        }

        return $model;
    }
}
