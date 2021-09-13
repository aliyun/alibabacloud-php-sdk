<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListIvrTrackingDetailsResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $instance;

    /**
     * @var string
     */
    public $callee;

    /**
     * @var int
     */
    public $enterTime;

    /**
     * @var mixed[]
     */
    public $nodeVariables;

    /**
     * @var string
     */
    public $nodeExitCode;

    /**
     * @var string
     */
    public $flowName;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var mixed[]
     */
    public $nodeProperties;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $caller;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $contactId;

    /**
     * @var int
     */
    public $leaveTime;

    /**
     * @var string
     */
    public $channelVariables;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'instance'         => 'Instance',
        'callee'           => 'Callee',
        'enterTime'        => 'EnterTime',
        'nodeVariables'    => 'NodeVariables',
        'nodeExitCode'     => 'NodeExitCode',
        'flowName'         => 'FlowName',
        'flowId'           => 'FlowId',
        'nodeProperties'   => 'NodeProperties',
        'nodeType'         => 'NodeType',
        'caller'           => 'Caller',
        'nodeName'         => 'NodeName',
        'contactId'        => 'ContactId',
        'leaveTime'        => 'LeaveTime',
        'channelVariables' => 'ChannelVariables',
        'channelId'        => 'ChannelId',
        'nodeId'           => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instance) {
            $res['Instance'] = $this->instance;
        }
        if (null !== $this->callee) {
            $res['Callee'] = $this->callee;
        }
        if (null !== $this->enterTime) {
            $res['EnterTime'] = $this->enterTime;
        }
        if (null !== $this->nodeVariables) {
            $res['NodeVariables'] = $this->nodeVariables;
        }
        if (null !== $this->nodeExitCode) {
            $res['NodeExitCode'] = $this->nodeExitCode;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->nodeProperties) {
            $res['NodeProperties'] = $this->nodeProperties;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->leaveTime) {
            $res['LeaveTime'] = $this->leaveTime;
        }
        if (null !== $this->channelVariables) {
            $res['ChannelVariables'] = $this->channelVariables;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Instance'])) {
            $model->instance = $map['Instance'];
        }
        if (isset($map['Callee'])) {
            $model->callee = $map['Callee'];
        }
        if (isset($map['EnterTime'])) {
            $model->enterTime = $map['EnterTime'];
        }
        if (isset($map['NodeVariables'])) {
            $model->nodeVariables = $map['NodeVariables'];
        }
        if (isset($map['NodeExitCode'])) {
            $model->nodeExitCode = $map['NodeExitCode'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['NodeProperties'])) {
            $model->nodeProperties = $map['NodeProperties'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['LeaveTime'])) {
            $model->leaveTime = $map['LeaveTime'];
        }
        if (isset($map['ChannelVariables'])) {
            $model->channelVariables = $map['ChannelVariables'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
