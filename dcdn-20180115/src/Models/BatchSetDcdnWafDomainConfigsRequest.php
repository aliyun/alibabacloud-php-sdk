<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class BatchSetDcdnWafDomainConfigsRequest extends Model
{
    /**
     * @example X-Forwarded-For
     *
     * @var string
     */
    public $clientIpTag;

    /**
     * @example on
     *
     * @var string
     */
    public $defenseStatus;

    /**
     * @example example.com,example2.com
     *
     * @var string
     */
    public $domainNames;
    protected $_name = [
        'clientIpTag'   => 'ClientIpTag',
        'defenseStatus' => 'DefenseStatus',
        'domainNames'   => 'DomainNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIpTag) {
            $res['ClientIpTag'] = $this->clientIpTag;
        }
        if (null !== $this->defenseStatus) {
            $res['DefenseStatus'] = $this->defenseStatus;
        }
        if (null !== $this->domainNames) {
            $res['DomainNames'] = $this->domainNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchSetDcdnWafDomainConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIpTag'])) {
            $model->clientIpTag = $map['ClientIpTag'];
        }
        if (isset($map['DefenseStatus'])) {
            $model->defenseStatus = $map['DefenseStatus'];
        }
        if (isset($map['DomainNames'])) {
            $model->domainNames = $map['DomainNames'];
        }

        return $model;
    }
}
