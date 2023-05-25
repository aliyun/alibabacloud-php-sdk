<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponseBody\instances\instanceAttribute\instanceSpecAttributes;

use AlibabaCloud\Tea\Model;

class specAttribute extends Model
{
    /**
     * @var string
     */
    public $localName;

    /**
     * @example 2500
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'localName' => 'LocalName',
        'value'     => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return specAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
