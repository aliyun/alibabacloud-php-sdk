<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetServiceLinkedRoleTemplateResponseBody\serviceLinkedRoleTemplate\roleDescriptions;

use AlibabaCloud\Tea\Model;

class roleDescription extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $language;
    protected $_name = [
        'description' => 'Description',
        'language'    => 'Language',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roleDescription
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        return $model;
    }
}
