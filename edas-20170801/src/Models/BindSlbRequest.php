<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class BindSlbRequest extends Model
{
    /**
     * @description The ID of the EDAS application.
     *
     * @example 3616cdca-*********
     *
     * @var string
     */
    public $appId;

    /**
     * @description The listener port for the SLB instance.
     *
     * @example 80
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The ID of the SLB instance.
     *
     * @example lb-wz96ph63r************
     *
     * @var string
     */
    public $slbId;

    /**
     * @description The IP address of the SLB instance.
     *
     * @example 192.16*.*.*
     *
     * @var string
     */
    public $slbIp;

    /**
     * @description The type of the SLB instance. Valid values:
     *
     *   internet: Internet-facing SLB instance
     *   intranet: internal-facing SLB instance
     *
     * @example intranet
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the vServer group for the internal-facing SLB instance.
     *
     * @example rsp-cige6******
     *
     * @var string
     */
    public $VServerGroupId;
    protected $_name = [
        'appId'          => 'AppId',
        'listenerPort'   => 'ListenerPort',
        'slbId'          => 'SlbId',
        'slbIp'          => 'SlbIp',
        'type'           => 'Type',
        'VServerGroupId' => 'VServerGroupId',
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
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }
        if (null !== $this->slbIp) {
            $res['SlbIp'] = $this->slbIp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindSlbRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }
        if (isset($map['SlbIp'])) {
            $model->slbIp = $map['SlbIp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }

        return $model;
    }
}
