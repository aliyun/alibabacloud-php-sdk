<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\CreateConfigTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the template.
     *
     * @example 125122
     *
     * @var int
     */
    public $id;
    protected $_name = [
        'id' => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
