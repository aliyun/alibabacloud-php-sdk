<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\BindSlbResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the Internet-facing SLB instance.
     *
     * @example “”
     *
     * @var string
     */
    public $extSlbId;

    /**
     * @description The IP address of the Internet-facing SLB instance.
     *
     * @example “”
     *
     * @var string
     */
    public $extSlbIp;

    /**
     * @description The name of the Internet-facing SLB instance.
     *
     * @example “”
     *
     * @var string
     */
    public $extSlbName;

    /**
     * @description The ID of the vServer group for the Internet-facing SLB instance.
     *
     * @example “”
     *
     * @var string
     */
    public $extVServerGroupId;

    /**
     * @description The ID of the internal-facing SLB instance.
     *
     * @example lb-wz96ph63r************
     *
     * @var string
     */
    public $slbId;

    /**
     * @description The IP address of the internal-facing SLB instance.
     *
     * @example 192.16*.*.*
     *
     * @var string
     */
    public $slbIp;

    /**
     * @description The name of the internal-facing SLB instance.
     *
     * @example test**********
     *
     * @var string
     */
    public $slbName;

    /**
     * @description The listener port for the SLB instance.
     *
     * @example 80
     *
     * @var int
     */
    public $slbPort;

    /**
     * @description The ID of the vServer group for the internal-facing SLB instance.
     *
     * @example “”
     *
     * @var string
     */
    public $VServerGroupId;
    protected $_name = [
        'extSlbId'          => 'ExtSlbId',
        'extSlbIp'          => 'ExtSlbIp',
        'extSlbName'        => 'ExtSlbName',
        'extVServerGroupId' => 'ExtVServerGroupId',
        'slbId'             => 'SlbId',
        'slbIp'             => 'SlbIp',
        'slbName'           => 'SlbName',
        'slbPort'           => 'SlbPort',
        'VServerGroupId'    => 'VServerGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extSlbId) {
            $res['ExtSlbId'] = $this->extSlbId;
        }
        if (null !== $this->extSlbIp) {
            $res['ExtSlbIp'] = $this->extSlbIp;
        }
        if (null !== $this->extSlbName) {
            $res['ExtSlbName'] = $this->extSlbName;
        }
        if (null !== $this->extVServerGroupId) {
            $res['ExtVServerGroupId'] = $this->extVServerGroupId;
        }
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }
        if (null !== $this->slbIp) {
            $res['SlbIp'] = $this->slbIp;
        }
        if (null !== $this->slbName) {
            $res['SlbName'] = $this->slbName;
        }
        if (null !== $this->slbPort) {
            $res['SlbPort'] = $this->slbPort;
        }
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtSlbId'])) {
            $model->extSlbId = $map['ExtSlbId'];
        }
        if (isset($map['ExtSlbIp'])) {
            $model->extSlbIp = $map['ExtSlbIp'];
        }
        if (isset($map['ExtSlbName'])) {
            $model->extSlbName = $map['ExtSlbName'];
        }
        if (isset($map['ExtVServerGroupId'])) {
            $model->extVServerGroupId = $map['ExtVServerGroupId'];
        }
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }
        if (isset($map['SlbIp'])) {
            $model->slbIp = $map['SlbIp'];
        }
        if (isset($map['SlbName'])) {
            $model->slbName = $map['SlbName'];
        }
        if (isset($map['SlbPort'])) {
            $model->slbPort = $map['SlbPort'];
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }

        return $model;
    }
}
