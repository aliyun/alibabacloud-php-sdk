<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class CheckFabricConsortiumDomainRequest extends Model
{
    /**
     * @var string
     */
    public $domainCode;
    protected $_name = [
        'domainCode' => 'DomainCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainCode) {
            $res['DomainCode'] = $this->domainCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckFabricConsortiumDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainCode'])) {
            $model->domainCode = $map['DomainCode'];
        }

        return $model;
    }
}
