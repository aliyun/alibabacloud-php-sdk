<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListApmMetadataResponseBody;

use AlibabaCloud\Tea\Model;

class metadata extends Model
{
    /**
     * @description 元数据值。
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'value' => 'Value',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
