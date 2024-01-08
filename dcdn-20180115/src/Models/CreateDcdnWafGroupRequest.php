<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class CreateDcdnWafGroupRequest extends Model
{
    /**
     * @description The name of the WAF rule group. The name can be up to 128 characters in length. This parameter is required when you create a custom WAF rule group.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description Specifies whether to enable subscription. Valid values:
     *
     *   **on**
     *   **off**
     *
     * When you replicate a custom rule group, do not specify this parameter.
     * @example on
     *
     * @var string
     */
    public $subscribe;

    /**
     * @description The ID of the rule group to be replicated. This parameter is required when you replicate a custom WAF rule group. You can call the [DescribeDcdnWafGroups](~~DescribeDcdnWafGroups~~) operation to query the ID of the rule group. If no template is used, set the value to 0 or do not specify this parameter.
     *
     * @example 0
     *
     * @var int
     */
    public $templateId;
    protected $_name = [
        'name'       => 'Name',
        'subscribe'  => 'Subscribe',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->subscribe) {
            $res['Subscribe'] = $this->subscribe;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDcdnWafGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Subscribe'])) {
            $model->subscribe = $map['Subscribe'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
