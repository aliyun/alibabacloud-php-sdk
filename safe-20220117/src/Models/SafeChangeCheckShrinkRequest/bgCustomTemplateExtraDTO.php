<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckShrinkRequest;

use AlibabaCloud\Dara\Model;

class bgCustomTemplateExtraDTO extends Model
{
    /**
     * @var string
     */
    public $bgCustomTemplateInfo;
    protected $_name = [
        'bgCustomTemplateInfo' => 'BgCustomTemplateInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bgCustomTemplateInfo) {
            $res['BgCustomTemplateInfo'] = $this->bgCustomTemplateInfo;
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
        if (isset($map['BgCustomTemplateInfo'])) {
            $model->bgCustomTemplateInfo = $map['BgCustomTemplateInfo'];
        }

        return $model;
    }
}
