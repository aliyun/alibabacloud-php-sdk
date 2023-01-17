<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class ModifyCdnDomainSchdmByPropertyRequest extends Model
{
    /**
     * @description The accelerated domain name for which you want to change the accelerated region. You can specify only one domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The accelerated region. Valid values for coverage:
     *
     *   **domestic**: Chinese mainland
     *   **overseas**: global (excluding the Chinese mainland)
     *   **global**: global
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
     * @return ModifyCdnDomainSchdmByPropertyRequest
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
