<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeleteTemplateRequest extends Model
{
    /**
     * @description The IDs of the templates that you want to delete. Separate multiple IDs with commas (,).
     *
     * @example ****20b48fb04483915d4f2cd8ac****,****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $templateIds;
    protected $_name = [
        'templateIds' => 'TemplateIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateIds) {
            $res['TemplateIds'] = $this->templateIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateIds'])) {
            $model->templateIds = $map['TemplateIds'];
        }

        return $model;
    }
}
