<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest\apiPassthrough\subject;

use AlibabaCloud\Tea\Model;

class customAttributes extends Model
{
    /**
     * @description Custom attribute type as:
     *
     * - 2.5.4.6 : country
     * - 2.5.4.10 : organization
     * - 2.5.4.11 : organizational unit
     * - 2.5.4.12 : title
     * - 2.5.4.3 : common name
     * - 2.5.4.9 : street
     * - 2.5.4.5 : serial number
     * - 2.5.4.7 : locality
     * - 2.5.4.8 : state
     * - 1.3.6.1.4.1.37244.1.1 : Matter Operational Certificate - Node ID
     * - 1.3.6.1.4.1.37244.1.5 : Matter Operational Certificate - Fabric ID
     * - 1.3.6.1.4.1.37244.2.1 : Matter Device Attestation Certificate Vender ID (VID)
     * - 1.3.6.1.4.1.37244.2.2 : Matter Device Attestation Certificate Product ID (PID).
     *
     * @example 2.5.4.3
     *
     * @var string
     */
    public $objectIdentifier;

    /**
     * @description Custom attribute value.
     *
     * @example Aliyun
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'objectIdentifier' => 'ObjectIdentifier',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->objectIdentifier) {
            $res['ObjectIdentifier'] = $this->objectIdentifier;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ObjectIdentifier'])) {
            $model->objectIdentifier = $map['ObjectIdentifier'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
