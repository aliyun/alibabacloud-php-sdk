<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeServiceLinkedRoleStatusRequest extends Model
{
    /**
     * @description The service-linked role. Default value: **AliyunServiceRoleForSas**. Valid values:
     *
     *   **AliyunServiceRoleForSas**: the service-linked role of Security Center. Security Center assumes this role to access the resources of other cloud services within your account.
     *   **AliyunServiceRoleForSasCspm**: the service-linked role of Security Center-CSPM. Security Center-CSPM assumes this role to access the resources of other cloud services within your account.
     *
     * @example AliyunServiceRoleForSas
     *
     * @var string
     */
    public $serviceLinkedRole;
    protected $_name = [
        'serviceLinkedRole' => 'ServiceLinkedRole',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceLinkedRole) {
            $res['ServiceLinkedRole'] = $this->serviceLinkedRole;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceLinkedRoleStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceLinkedRole'])) {
            $model->serviceLinkedRole = $map['ServiceLinkedRole'];
        }

        return $model;
    }
}
