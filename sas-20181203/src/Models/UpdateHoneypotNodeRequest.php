<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateHoneypotNodeRequest extends Model
{
    /**
     * @description The number of available probes.
     *
     * This parameter is required.
     * @example 20
     *
     * @var int
     */
    public $availableProbeNum;

    /**
     * @description The ID of the management node.
     *
     * This parameter is required.
     * @example 67ab3f4c-3db5-4fc3-b51f-00f8bfabfa08
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The name of the management node.
     *
     * This parameter is required.
     * @example HoneypotNodeTest
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The CIDR blocks that are allowed to access the management node.
     *
     * @var string[]
     */
    public $securityGroupProbeIpList;
    protected $_name = [
        'availableProbeNum'        => 'AvailableProbeNum',
        'nodeId'                   => 'NodeId',
        'nodeName'                 => 'NodeName',
        'securityGroupProbeIpList' => 'SecurityGroupProbeIpList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableProbeNum) {
            $res['AvailableProbeNum'] = $this->availableProbeNum;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->securityGroupProbeIpList) {
            $res['SecurityGroupProbeIpList'] = $this->securityGroupProbeIpList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHoneypotNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableProbeNum'])) {
            $model->availableProbeNum = $map['AvailableProbeNum'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['SecurityGroupProbeIpList'])) {
            if (!empty($map['SecurityGroupProbeIpList'])) {
                $model->securityGroupProbeIpList = $map['SecurityGroupProbeIpList'];
            }
        }

        return $model;
    }
}
