<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnIpaUserDomainsRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The array that consists of multiple PageData parameters. The details about each accelerated domain name are included in a separate PageData parameter.
     *
     * @example 1
     *
     * @var string
     */
    public $key;

    /**
     * @description The time when the accelerated domain name was added to Alibaba Cloud Dynamic Route for CDN (DCDN).
     *
     * @example 1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
