<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyIPAclConfigRequest;

use AlibabaCloud\Tea\Model;

class IPAclConfig extends Model
{
    /**
     * @description The mode of access control on source IP addresses. Valid values:
     *
     *   **black**: blacklist mode.
     *   **white**: whitelist mode.
     *
     * This parameter is required.
     *
     * @example white
     *
     * @var string
     */
    public $aclType;

    /**
     * @description The source IP addresses in the blacklist or whitelist.
     *
     * >
     *
     *   This parameter is required if AclType is set to white.
     *
     *   If AclType is set to black but you do not want to add IP addresses to the blacklist, you can leave IPs empty.
     *
     * This parameter is required.
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
