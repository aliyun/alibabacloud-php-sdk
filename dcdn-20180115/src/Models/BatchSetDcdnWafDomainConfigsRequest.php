<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class BatchSetDcdnWafDomainConfigsRequest extends Model
{
    /**
     * @description Specifies the header that records the IP address to be obtained. If the default header is selected, the value of this parameter is empty. If a custom header is selected, the value of this parameter is the value specified by the user. Separate multiple values with commas (,). You can specify a maximum of five values.
     *
     * @example X-Forwarded-For
     *
     * @var string
     */
    public $clientIpTag;

    /**
     * @description The protection status of the domain name. Valid values: on, off, and empty string.
     *
     *   When you add a domain name, the value of this parameter is **on**, and the value of ClientIpTag takes effect, which is empty if the default header is selected and is the value specified by the user if a custom header is selected.
     *   When you delete a domain name, the value of this parameter is **off**, and the value of ClientIpTag does not take effect.
     *   When you only modify the value of ClientIpTag, the value of DefenseStatus is an empty string.
     *
     * @example on
     *
     * @var string
     */
    public $defenseStatus;

    /**
     * @description The protected domain names for which you want to change the protection status. You can specify up to 50 domain names. Separate multiple domain names with commas (,).
     *
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
