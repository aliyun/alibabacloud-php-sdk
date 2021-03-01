<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateK8sSlbRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $slbProtocol;

    /**
     * @var string
     */
    public $targetPort;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $servicePortInfos;

    /**
     * @var string
     */
    public $specification;

    /**
     * @var string
     */
    public $scheduler;

    /**
     * @var string
     */
    public $slbName;
    protected $_name = [
        'appId'            => 'AppId',
        'clusterId'        => 'ClusterId',
        'type'             => 'Type',
        'slbProtocol'      => 'SlbProtocol',
        'targetPort'       => 'TargetPort',
        'port'             => 'Port',
        'servicePortInfos' => 'ServicePortInfos',
        'specification'    => 'Specification',
        'scheduler'        => 'Scheduler',
        'slbName'          => 'SlbName',
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
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->slbProtocol) {
            $res['SlbProtocol'] = $this->slbProtocol;
        }
        if (null !== $this->targetPort) {
            $res['TargetPort'] = $this->targetPort;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->servicePortInfos) {
            $res['ServicePortInfos'] = $this->servicePortInfos;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->slbName) {
            $res['SlbName'] = $this->slbName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateK8sSlbRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['SlbProtocol'])) {
            $model->slbProtocol = $map['SlbProtocol'];
        }
        if (isset($map['TargetPort'])) {
            $model->targetPort = $map['TargetPort'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ServicePortInfos'])) {
            $model->servicePortInfos = $map['ServicePortInfos'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['SlbName'])) {
            $model->slbName = $map['SlbName'];
        }

        return $model;
    }
}
