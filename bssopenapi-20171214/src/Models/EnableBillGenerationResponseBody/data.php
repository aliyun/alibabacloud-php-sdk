<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\EnableBillGenerationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the feature is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $boolean;
    protected $_name = [
        'boolean' => 'Boolean',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boolean) {
            $res['Boolean'] = $this->boolean;
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
        if (isset($map['Boolean'])) {
            $model->boolean = $map['Boolean'];
        }

        return $model;
    }
}
