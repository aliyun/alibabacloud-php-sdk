<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeleteTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $templateIds;
    protected $_name = [
        'templateIds' => 'TemplateIds',
    ];

    public function validate()
    {
    }

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
