<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\GetInstancePropertiesResponseBody;

use AlibabaCloud\Tea\Model;

class propertyTemplateModel extends Model
{
    /**
     * @example { "propties":{"key1":"value1"}}
     *
     * @var string
     */
    public $content;
    protected $_name = [
        'content' => 'Content',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyTemplateModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
