<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest\apiPassthrough\extensions;

use AlibabaCloud\Tea\Model;

class subjectAlternativeNames extends Model
{
    /**
     * @description The type of the alias. Valid values:
     *
     *   rfc822Name: email address
     *   dNSName: domain name
     *   uniformResourceIdentifier: URI
     *   iPAddress: IP address
     *
     * This parameter is required.
     *
     * @example dNSName
     *
     * @var string
     */
    public $type;

    /**
     * @description The alias that meets the requirement of a specified type.
     *
     * @example rfc822Name:
     * exmaple@certqa.cn
     *
     * dNSName:
     * www.certqa.cn
     *
     * uniformResourceIdentifier:
     * acs:ecs:regionid:15619224785*****:instance/i-bp1bzvz55uz27hf*****
     *
     * iPAddress:
     * 127.0.0.1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'type' => 'Type',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subjectAlternativeNames
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
