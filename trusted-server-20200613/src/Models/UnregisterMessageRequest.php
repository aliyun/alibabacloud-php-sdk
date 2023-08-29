<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trustedserver\V20200613\Models;

use AlibabaCloud\Tea\Model;

class UnregisterMessageRequest extends Model
{
    /**
     * @example ["0f74b5cc-ff0e-4fa6-b457-1dc58072****"]
     *
     * @var string
     */
    public $properties;
    protected $_name = [
        'properties' => 'Properties',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnregisterMessageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }

        return $model;
    }
}
