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
     * @var bool
     */
    public $disableForceOverride;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $scheduler;

    /**
     * @var string
     */
    public $servicePortInfos;

    /**
     * @var string
     */
    public $slbName;

    /**
     * @var string
     */
    public $slbProtocol;

    /**
     * @var string
     */
    public $specification;

    /**
     * @var string
     */
    public $targetPort;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'appId'                => 'AppId',
        'clusterId'            => 'ClusterId',
        'disableForceOverride' => 'DisableForceOverride',
        'port'                 => 'Port',
        'scheduler'            => 'Scheduler',
        'servicePortInfos'     => 'ServicePortInfos',
        'slbName'              => 'SlbName',
        'slbProtocol'          => 'SlbProtocol',
        'specification'        => 'Specification',
        'targetPort'           => 'TargetPort',
        'type'                 => 'Type',
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
        if (null !== $this->disableForceOverride) {
            $res['DisableForceOverride'] = $this->disableForceOverride;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->servicePortInfos) {
            $res['ServicePortInfos'] = $this->servicePortInfos;
        }
        if (null !== $this->slbName) {
            $res['SlbName'] = $this->slbName;
        }
        if (null !== $this->slbProtocol) {
            $res['SlbProtocol'] = $this->slbProtocol;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }
        if (null !== $this->targetPort) {
            $res['TargetPort'] = $this->targetPort;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['DisableForceOverride'])) {
            $model->disableForceOverride = $map['DisableForceOverride'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['ServicePortInfos'])) {
            $model->servicePortInfos = $map['ServicePortInfos'];
        }
        if (isset($map['SlbName'])) {
            $model->slbName = $map['SlbName'];
        }
        if (isset($map['SlbProtocol'])) {
            $model->slbProtocol = $map['SlbProtocol'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }
        if (isset($map['TargetPort'])) {
            $model->targetPort = $map['TargetPort'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
