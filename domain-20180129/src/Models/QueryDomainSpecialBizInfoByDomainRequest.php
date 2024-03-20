<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class QueryDomainSpecialBizInfoByDomainRequest extends Model
{
    /**
     * @description The business type.
     *
     * @example govRegister
     *
     * @var string
     */
    public $bizType;

    /**
     * @description The domain name.
     *
     * @example test003.cn
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The IP address of the client.
     *
     * @example 127.0.0.1
     *
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'bizType'      => 'BizType',
        'domainName'   => 'DomainName',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDomainSpecialBizInfoByDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
