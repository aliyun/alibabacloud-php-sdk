<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class ModifyDCdnDomainSchdmByPropertyRequest extends Model
{
    /**
     * @description The name of the accelerated domain for which you want to change the acceleration region. You can specify only one domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The region where the acceleration service is deployed. Valid values:
     *
     *   **domestic**: Chinese mainland
     *   **overseas**: outside the Chinese mainland
     *   **global**: all the countries around the world
     *
     * @example {"coverage":"overseas"}
     *
     * @var string
     */
    public $property;
    protected $_name = [
        'domainName' => 'DomainName',
        'property'   => 'Property',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->property) {
            $res['Property'] = $this->property;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDCdnDomainSchdmByPropertyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Property'])) {
            $model->property = $map['Property'];
        }

        return $model;
    }
}
