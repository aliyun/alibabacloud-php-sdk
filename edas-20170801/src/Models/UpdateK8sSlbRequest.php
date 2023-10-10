<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateK8sSlbRequest extends Model
{
    /**
     * @description The ID of the application. You can query the application ID by calling the ListApplication operation. For more information, see [ListApplication](~~149390~~).
     *
     * @example 5a166fbd-****-****-a286-781659d9f54c
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the cluster. You can query the cluster ID by calling the GetK8sCluster operation. For more information, see [GetK8sCluster](~~181437~~).
     *
     * @example 712082c3-****-****-9217-a947b5cde6ee
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Specifies whether to disable listener configuration overriding.
     *
     *   true: disables listener configuration overriding.
     *   false: enables listener configuration overriding.
     *
     * @example true
     *
     * @var bool
     */
    public $disableForceOverride;

    /**
     * @description The frontend port. Valid values: 1 to 65535.
     *
     * @example 80
     *
     * @var string
     */
    public $port;

    /**
     * @description The scheduling algorithm for the SLB instance. If you do not specify this parameter, the default value rr is used. SLB supports the following scheduling algorithms: round-robin and weighted round-robin. Valid values:
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
     *   port: required. The frontend port. Valid values: 1 to 65535. Each port must be unique.
     *   targetPort: required. The backend port. Valid values: 1 to 65535.
     *   loadBalancerProtocol: required. Valid values: TCP and HTTPS. If the HTTP protocol is used, set this parameter to TCP.
     *   certId: the ID of the certificate. This parameter is required if the HTTPS protocol is used. You can purchase an SLB instance in the SLB console.
     *   Note: The ServicePortInfos parameter is specified to support multi-port mappings. If you want this parameter to take effect, make sure that you specify the AppId, ClusterId, Type, and SlbId parameters.
     *
     * @example {"targetPort":8080,"port":82,"loadBalancerProtocol":"TCP"},{"port":81,"certId":"136246975637380916c185d6fa21914500329_-xxxxxxx","targetPort":8181,"lo adBalancerProtocol":"HTTPS"}
     *
     * @var string
     */
    public $servicePortInfos;

    /**
     * @description The name of the SLB instance.
     *
     * @example SLB_doctest
     *
     * @var string
     */
    public $slbName;

    /**
     * @description The protocol used by the SLB instance. Set the value to TCP.
     *
     * @example TCP
     *
     * @var string
     */
    public $slbProtocol;

    /**
     * @description The specifications of the SLB instance.
     *
     *   slb.s1.small
     *   slb.s2.small
     *   slb.s2.medium
     *   slb.s3.small
     *   slb.s3.medium
     *   slb.s3.large
     *
     * If you do not specify this parameter, the default value slb.s1.small is used.
     * @example slb.s1.small
     *
     * @var string
     */
    public $specification;

    /**
     * @description The backend port, which is also the service port of the application. Valid values: 1 to 65535.
     *
     * @example 8082
     *
     * @var string
     */
    public $targetPort;

    /**
     * @description The type of the SLB instance. Valid values:
     *
     *   Internet: an Internet-facing SLB instance
     *   Intranet: an internal-facing SLB instance
     *
     * @example Internet
     *
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
