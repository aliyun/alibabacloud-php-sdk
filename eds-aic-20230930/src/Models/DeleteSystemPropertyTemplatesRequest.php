<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DeleteSystemPropertyTemplatesRequest extends Model
{
    /**
     * @var string[]
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
     * @return DeleteSystemPropertyTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateIds'])) {
            if (!empty($map['TemplateIds'])) {
                $model->templateIds = $map['TemplateIds'];
            }
        }

        return $model;
    }
}
