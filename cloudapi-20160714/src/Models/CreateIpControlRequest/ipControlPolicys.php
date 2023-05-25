<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateIpControlRequest;

use AlibabaCloud\Tea\Model;

class ipControlPolicys extends Model
{
    /**
     * @example 11111
     *
     * @var string
     */
    public $appId;

    /**
     * @example 114.1.1.0/24
     *
     * @var string
     */
    public $cidrIp;
    protected $_name = [
        'appId'  => 'AppId',
        'cidrIp' => 'CidrIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->cidrIp) {
            $res['CidrIp'] = $this->cidrIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipControlPolicys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CidrIp'])) {
            $model->cidrIp = $map['CidrIp'];
        }

        return $model;
    }
}
