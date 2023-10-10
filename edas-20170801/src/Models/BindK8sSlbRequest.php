<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class BindK8sSlbRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 5a166fbd-****-****-a286-781659d9f54c
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the cluster.
     *
     * @example 712082c3-f554-****-****-a947b5cde6ee
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The frontend port. Valid values: 1 to 65535.
     *
     * @example 80
     *
     * @var string
     */
    public $port;

    /**
     * @description The scheduling algorithm for the SLB instance. If you do not specify this parameter, the default value rr is used. Valid values:
     *
     *   wrr: weighted round-robin scheduling. Backend servers that have higher weights receive more requests than those that have lower weights.
     *   rr: round-robin scheduling. Requests are sequentially distributed to backend servers.
     *
     * @example wrr
     *
     * @var string
     */
    public $scheduler;

    /**
     * @description The information about the ports. This parameter is required if you want to configure multi-port mappings or use a protocol other than TCP. You must set this parameter to a JSON array. Example: \[{"targetPort":8080,"port":82,"loadBalancerProtocol":"TCP"},{"port":81,"certId":"1362469756373809\_16c185d6fa2\_1914500329\_-xxxxxxx","targetPort":8181,"lo adBalancerProtocol":"HTTPS"}]
     *
     *   port: The frontend port. Valid values: 1 to 65535. This parameter is required. Each port must be unique.
     *   targetPort: The backend port. Valid values: 1 to 65535. This parameter is required.
     *   loadBalancerProtocol: This parameter is required. Valid values: TCP and HTTPS. If the HTTP protocol is used, set this parameter to TCP.
     *   certId: the ID of the certificate. This parameter is required if the HTTPS protocol is used. You can purchase an SLB instance in the SLB console.
     *
     * > The ServicePortInfos parameter is specified to support multi-port mappings. If you want this parameter to take effect, make sure that you have set the AppId, ClusterId, Type, and SlbId parameters.
     * @example [{"targetPort":8080,"port":82,"loadBalancerProtocol":"TCP"},{"port":81,"certId":"136246975637380916c185d6fa21914500329_-988as","targetPort":8181,"lo adBalancerProtocol":"HTTPS"}]
     *
     * @var string
     */
    public $servicePortInfos;

    /**
     * @description The ID of the SLB instance. If you leave this parameter empty, Enterprise Distributed Application Service (EDAS) automatically purchases an SLB instance.
     *
     * @example lb-2ze1quax9t****iz82bjt
     *
     * @var string
     */
    public $slbId;

    /**
     * @description The protocol used by the SLB instance. Valid values: TCP, HTTP, and HTTPS.
     *
     * @example TCP
     *
     * @var string
     */
    public $slbProtocol;

    /**
     * @description The instance type of the SLB instance. Valid values:
     *
     *   slb.s1.small
     *   slb.s2.small
     *   slb.s2.medium
     *   slb.s3.small
     *   slb.s3.medium
     *   slb.s3.large
     *
     * @example slb.s1.small
     *
     * @var string
     */
    public $specification;

    /**
     * @description The backend port, which is also the service port of the application. Valid values: 1 to 65535.
     *
     * @example 8080
     *
     * @var string
     */
    public $targetPort;

    /**
     * @description The type of the SLB instance. Valid values:
     *
     *   internet: Internet-facing SLB instance
     *   intranet: internal-facing SLB instance
     *
     * @example internet
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'appId'            => 'AppId',
        'clusterId'        => 'ClusterId',
        'port'             => 'Port',
        'scheduler'        => 'Scheduler',
        'servicePortInfos' => 'ServicePortInfos',
        'slbId'            => 'SlbId',
        'slbProtocol'      => 'SlbProtocol',
        'specification'    => 'Specification',
        'targetPort'       => 'TargetPort',
        'type'             => 'Type',
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
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->servicePortInfos) {
            $res['ServicePortInfos'] = $this->servicePortInfos;
        }
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
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
     * @return BindK8sSlbRequest
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
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['ServicePortInfos'])) {
            $model->servicePortInfos = $map['ServicePortInfos'];
        }
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
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
