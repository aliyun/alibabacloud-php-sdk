<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DeleteDnsFirewallPolicyRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 498946f4-c98a-45c0-9038-635c******
     *
     * @var string
     */
    public $aclUuid;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example 140.210.39.***
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'aclUuid' => 'AclUuid',
        'lang' => 'Lang',
        'sourceIp' => 'SourceIp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclUuid) {
            $res['AclUuid'] = $this->aclUuid;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDnsFirewallPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclUuid'])) {
            $model->aclUuid = $map['AclUuid'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
