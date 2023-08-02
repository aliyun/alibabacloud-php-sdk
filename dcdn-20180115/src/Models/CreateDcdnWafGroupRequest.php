<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class CreateDcdnWafGroupRequest extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example on
     *
     * @var string
     */
    public $subscribe;

    /**
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
