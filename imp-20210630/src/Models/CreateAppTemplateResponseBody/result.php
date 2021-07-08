<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\CreateAppTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 应用模板唯一标示
     *
     * @var string
     */
    public $appTemplateId;
    protected $_name = [
        'appTemplateId' => 'AppTemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appTemplateId) {
            $res['AppTemplateId'] = $this->appTemplateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppTemplateId'])) {
            $model->appTemplateId = $map['AppTemplateId'];
        }

        return $model;
    }
}
