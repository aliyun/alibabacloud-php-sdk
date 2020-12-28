<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class DeleteJobTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $templates;
    protected $_name = [
        'templates' => 'Templates',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templates) {
            $res['Templates'] = $this->templates;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteJobTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Templates'])) {
            $model->templates = $map['Templates'];
        }

        return $model;
    }
}
