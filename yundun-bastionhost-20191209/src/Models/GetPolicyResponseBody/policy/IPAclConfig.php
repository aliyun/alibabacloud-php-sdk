<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponseBody\policy;

use AlibabaCloud\Tea\Model;

class IPAclConfig extends Model
{
    /**
     * @description The mode of access control on source IP addresses. Valid values:
     *
     *   white: whitelist mode.
     *   black: blacklist mode.
     *
     * @example black
     *
     * @var string
     */
    public $aclType;

    /**
     * @description The IP addresses from which logons are not allowed.
     *
     * @var string[]
     */
    public $IPs;
    protected $_name = [
        'aclType' => 'AclType',
        'IPs' => 'IPs',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }
        if (null !== $this->IPs) {
            $res['IPs'] = $this->IPs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IPAclConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }
        if (isset($map['IPs'])) {
            if (!empty($map['IPs'])) {
                $model->IPs = $map['IPs'];
            }
        }

        return $model;
    }
}
