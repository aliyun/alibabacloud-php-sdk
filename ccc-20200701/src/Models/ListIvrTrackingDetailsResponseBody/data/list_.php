<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListIvrTrackingDetailsResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 0533128****
     *
     * @var string
     */
    public $callee;

    /**
     * @example 1332315****
     *
     * @var string
     */
    public $caller;

    /**
     * @example 65cp2c15-92ac-4e67-98b2-073a3c541c5d
     *
     * @var string
     */
    public $channelId;

    /**
     * @example A=B;C=D
     *
     * @var string
     */
    public $channelVariables;

    /**
     * @example job-10963442671187****
     *
     * @var string
     */
    public $contactId;

    /**
     * @example 1621910542876
     *
     * @var int
     */
    public $enterTime;

    /**
     * @example abc99462-1058-47d0-a114-f145ea7444ff
     *
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $flowName;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instance;

    /**
     * @example 1621910545105
     *
     * @var int
     */
    public $leaveTime;

    /**
     * @example Success
     *
     * @var string
     */
    public $nodeExitCode;

    /**
     * @example e0bc19a3
     *
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var mixed[]
     */
    public $nodeProperties;

    /**
     * @example PLAY_OR_SAY
     *
     * @var string
     */
    public $nodeType;

    /**
     * @example {"digits":"2"}
     *
     * @var mixed[]
     */
    public $nodeVariables;
    protected $_name = [
        'callee'           => 'Callee',
        'caller'           => 'Caller',
        'channelId'        => 'ChannelId',
        'channelVariables' => 'ChannelVariables',
        'contactId'        => 'ContactId',
        'enterTime'        => 'EnterTime',
        'flowId'           => 'FlowId',
        'flowName'         => 'FlowName',
        'instance'         => 'Instance',
        'leaveTime'        => 'LeaveTime',
        'nodeExitCode'     => 'NodeExitCode',
        'nodeId'           => 'NodeId',
        'nodeName'         => 'NodeName',
        'nodeProperties'   => 'NodeProperties',
        'nodeType'         => 'NodeType',
        'nodeVariables'    => 'NodeVariables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callee) {
            $res['Callee'] = $this->callee;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->channelVariables) {
            $res['ChannelVariables'] = $this->channelVariables;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->enterTime) {
            $res['EnterTime'] = $this->enterTime;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->instance) {
            $res['Instance'] = $this->instance;
        }
        if (null !== $this->leaveTime) {
            $res['LeaveTime'] = $this->leaveTime;
        }
        if (null !== $this->nodeExitCode) {
            $res['NodeExitCode'] = $this->nodeExitCode;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->nodeProperties) {
            $res['NodeProperties'] = $this->nodeProperties;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->nodeVariables) {
            $res['NodeVariables'] = $this->nodeVariables;
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
        if (isset($map['Callee'])) {
            $model->callee = $map['Callee'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['ChannelVariables'])) {
            $model->channelVariables = $map['ChannelVariables'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['EnterTime'])) {
            $model->enterTime = $map['EnterTime'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['Instance'])) {
            $model->instance = $map['Instance'];
        }
        if (isset($map['LeaveTime'])) {
            $model->leaveTime = $map['LeaveTime'];
        }
        if (isset($map['NodeExitCode'])) {
            $model->nodeExitCode = $map['NodeExitCode'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['NodeProperties'])) {
            $model->nodeProperties = $map['NodeProperties'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['NodeVariables'])) {
            $model->nodeVariables = $map['NodeVariables'];
        }

        return $model;
    }
}
