<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigTagResponseBody\configTagList\configTag\valueList;

use AlibabaCloud\Tea\Model;

class value extends Model
{
    /**
     * @example BASIC
     *
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $valueDesc;
    protected $_name = [
        'value'     => 'Value',
        'valueDesc' => 'ValueDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->valueDesc) {
            $res['ValueDesc'] = $this->valueDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return value
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['ValueDesc'])) {
            $model->valueDesc = $map['ValueDesc'];
        }

        return $model;
    }
}
