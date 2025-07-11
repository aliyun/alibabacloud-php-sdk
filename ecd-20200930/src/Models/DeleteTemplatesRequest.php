<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DeleteTemplatesRequest extends Model
{
    /**
     * @description >  This parameter is not publicly available.
     *
     * @example null
     *
     * @var string
     */
    public $bizType;

    /**
     * @description The IDs of the templates that you want to delete.
     *
     * @var string[]
     */
    public $templateIds;
    protected $_name = [
        'bizType' => 'BizType',
        'templateIds' => 'TemplateIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->templateIds) {
            $res['TemplateIds'] = $this->templateIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['TemplateIds'])) {
            if (!empty($map['TemplateIds'])) {
                $model->templateIds = $map['TemplateIds'];
            }
        }

        return $model;
    }
}
