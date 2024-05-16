<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainVerifyDataRequest extends Model
{
    /**
     * @description The accelerated domain name. You can specify only one domain name in each request.
     *
     * This parameter is required.
     * @example www.yourdomain.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Specifies whether to enable the global resource plan.
     *
     * Valid values:
     *
     *   off
     *
     * <!-- -->
     *
     *   on
     *
     * <!-- -->
     * @example off
     *
     * @var string
     */
    public $globalResourcePlan;
    protected $_name = [
        'domainName'         => 'DomainName',
        'globalResourcePlan' => 'GlobalResourcePlan',
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
        if (null !== $this->globalResourcePlan) {
            $res['GlobalResourcePlan'] = $this->globalResourcePlan;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainVerifyDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['GlobalResourcePlan'])) {
            $model->globalResourcePlan = $map['GlobalResourcePlan'];
        }

        return $model;
    }
}
