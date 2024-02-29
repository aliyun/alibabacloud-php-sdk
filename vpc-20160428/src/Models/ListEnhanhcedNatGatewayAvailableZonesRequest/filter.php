<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListEnhanhcedNatGatewayAvailableZonesRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description The filter key. Only **PrivateLinkEnabled** is supported.
     *
     * @example PrivateLinkEnabled
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the filter key.
     *
     * >  If the filter key is set to **PrivateLinkEnabled**, you must specify a filter value. Valid values: **true** and **false**.
     * @example true
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
     * @return filter
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
