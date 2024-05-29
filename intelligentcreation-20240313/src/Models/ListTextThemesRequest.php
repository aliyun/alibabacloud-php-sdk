<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class ListTextThemesRequest extends Model
{
    /**
     * @var string
     */
    public $industry;
    protected $_name = [
        'industry' => 'industry',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->industry) {
            $res['industry'] = $this->industry;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTextThemesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['industry'])) {
            $model->industry = $map['industry'];
        }

        return $model;
    }
}
