<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\ListApplicationsResponseBody\applications\application\appList;

use AlibabaCloud\Tea\Model;

class app extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example e76f8985-7965-41fc-925b-9648bb6bf650
     *
     * @var string
     */
    public $appId;

    /**
     * @description The information about the application, such as the resource specification, parameter configuration, and resources.
     *
     * @example {
     * "AppStatus":{
     * "Phase":"RUNNING",
     * "StatusDescrip":"{\\"status\\":\\"UPDATE_SUCCESS\\",\\"step\\":\\"DONE\\",\\"descrip\\":\\"update to version:1022 success\\",\\"start_time\\":\\"2022-03-01 16:18:22\\"}",
     * "UpdateTime":"2022-03-01 16:18:22",
     * "OrderStatus":null
     * },
     * "ResourceAttribute":{
     * "NetSecurityInfo":null,
     * "InitConfig":null,
     * "InventoryType":"Ens",
     * "InstanceSpec":"ens.gi6s-c12g1.large",
     * "SystemDiskSize":100,
     * "DataDiskSize":0,
     * "BandwithOut":5000,
     * "SchedulingStrategy":"Disperse",
     * "ImageId":"m-5or73kzkuxytv7hh6wxr6yc5q",
     * "ResourceType":"Linux",
     * "AreaLevel":"National",
     * "IpType":"PublicIP"
     * },
     * "WorkloadAttribute":[
     * {
     * "Name":"andorid",
     * "Count":15,
     * "ServiceConfig":{
     * "PortsBindConfig":{
     * "NetServiceContainer":"uravi-service",
     * "Ports":[
     * {
     * "Protocol":"TCP",
     * "BindType":"Mapping",
     * "StartNodePorts":"31000-31009",
     * "ContainerPorts":"4440-4449"
     * },
     * {
     * "Protocol":"TCP",
     * "BindType":"PassThrough",
     * "StartNodePorts":"59000-59000",
     * "ContainerPorts":"59000-59000"
     * },
     * {
     * "Protocol":"UDP",
     * "BindType":"PassThrough",
     * "StartNodePorts":"40001-40010",
     * "ContainerPorts":"40001-40010"
     * }
     * ]
     * },
     * "ServiceContainerName":"android"
     * }
     * },
     * {
     * "Name":"coturn",
     * "Count":1,
     * "ServiceConfig":{
     * "PortsBindConfig":{
     * "NetServiceContainer":"coturn",
     * "Ports":[
     * {
     * "Protocol":"TCP",
     * "BindType":"PassThrough",
     * "StartNodePorts":"3478-3478",
     * "ContainerPorts":"3478-3478"
     * },
     * {
     * "Protocol":"UDP",
     * "BindType":"PassThrough",
     * "StartNodePorts":"3478-3478",
     * "ContainerPorts":"3478-3478"
     * }
     * ]
     * },
     * "ServiceContainerName":"coturn"
     * }
     * },
     * {
     * "Name":"aic-manager",
     * "Count":1,
     * "ServiceConfig":null
     * }
     * ]
     * }
     *
     * @var string
     */
    public $appInfo;
    protected $_name = [
        'appId' => 'AppId',
        'appInfo' => 'AppInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appInfo) {
            $res['AppInfo'] = $this->appInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return app
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppInfo'])) {
            $model->appInfo = $map['AppInfo'];
        }

        return $model;
    }
}
