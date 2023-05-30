<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class ModifyTrFirewallV2ConfigurationRequest extends Model
{
    /**
     * @example vfw-tr-bcdf89d405ce4bd2****
     *
     * @var string
     */
    public $firewallId;

    /**
     * @var string
     */
    public $firewallName;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'firewallId'   => 'FirewallId',
        'firewallName' => 'FirewallName',
        'lang'         => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->firewallId) {
            $res['FirewallId'] = $this->firewallId;
        }
        if (null !== $this->firewallName) {
            $res['FirewallName'] = $this->firewallName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTrFirewallV2ConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirewallId'])) {
            $model->firewallId = $map['FirewallId'];
        }
        if (isset($map['FirewallName'])) {
            $model->firewallName = $map['FirewallName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
