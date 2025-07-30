<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateDomainRequest;

use AlibabaCloud\Tea\Model;

class filing extends Model
{
    /**
     * @description Record number associated with the domain name.
     *
     * @example 浙xx-xxxxxx
     *
     * @var string
     */
    public $icpNumber;
    protected $_name = [
        'icpNumber' => 'IcpNumber',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->icpNumber) {
            $res['IcpNumber'] = $this->icpNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filing
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IcpNumber'])) {
            $model->icpNumber = $map['IcpNumber'];
        }

        return $model;
    }
}
