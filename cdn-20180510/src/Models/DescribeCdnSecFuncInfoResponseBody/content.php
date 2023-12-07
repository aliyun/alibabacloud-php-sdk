<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnSecFuncInfoResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The tag.
     *
     * @example TLS_ECDHE_ECDSA_WITH_CHACHA20_POLY1305_SHA256
     *
     * @var string
     */
    public $label;

    /**
     * @description The value.
     *
     * @example TLS_ECDHE_ECDSA_WITH_CHACHA20_POLY1305_SHA256
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'label' => 'Label',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
