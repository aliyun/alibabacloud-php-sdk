<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRoutersRequest;

use AlibabaCloud\Tea\Model;

class featureFilter extends Model
{
    /**
     * @description The value of the field that is used to enable or disable a feature of the transit router. Supported fields:
     *
     *   **Multicast**: the multicast feature.
     *
     * @example Multicast
     *
     * @var string
     */
    public $key;

    /**
     * @description The fields that are used to enable or disable the features of the transit router. The **Multicast** field supports only one value. Valid values:
     *
     *   **Enabled**: enables multicast.
     *   **Disabled**: disables multicast.
     *
     * @var string[]
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
     * @return featureFilter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            if (!empty($map['Value'])) {
                $model->value = $map['Value'];
            }
        }

        return $model;
    }
}
