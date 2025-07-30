<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetDomainResponseBody\domain;

use AlibabaCloud\Tea\Model;

class filing extends Model
{
    /**
     * @description <notice>The ICP filing number is only applicable for services in the China region.  For non-China regions, no validation or display of this record number will be performed.</notice>
     * The ICP filing number associated with the domain name, with a maximum length of 64 characters.
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
