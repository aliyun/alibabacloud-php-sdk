<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class UpdateAppTemplateRequest extends Model
{
    /**
     * @description 应用模板唯一标识
     *
     * @var string
     */
    public $appTemplateId;

    /**
     * @description 应用模板名称
     *
     * @var string
     */
    public $appTemplateName;
    protected $_name = [
        'appTemplateId'   => 'AppTemplateId',
        'appTemplateName' => 'AppTemplateName',
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
        if (null !== $this->appTemplateName) {
            $res['AppTemplateName'] = $this->appTemplateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAppTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppTemplateId'])) {
            $model->appTemplateId = $map['AppTemplateId'];
        }
        if (isset($map['AppTemplateName'])) {
            $model->appTemplateName = $map['AppTemplateName'];
        }

        return $model;
    }
}
