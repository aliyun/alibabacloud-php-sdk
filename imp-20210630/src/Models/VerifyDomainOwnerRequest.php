<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class VerifyDomainOwnerRequest extends Model
{
    /**
     * @description 直播域名
     *
     * @var string
     */
    public $liveDomainName;
    protected $_name = [
        'liveDomainName' => 'LiveDomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveDomainName) {
            $res['LiveDomainName'] = $this->liveDomainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyDomainOwnerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveDomainName'])) {
            $model->liveDomainName = $map['LiveDomainName'];
        }

        return $model;
    }
}
