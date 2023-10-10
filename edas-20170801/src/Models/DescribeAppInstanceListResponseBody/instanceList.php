<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\DescribeAppInstanceListResponseBody;

use AlibabaCloud\Tea\Model;

class instanceList extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 93fdd228-*****-ed2ae98de18d
     *
     * @var string
     */
    public $appId;

    /**
     * @description Indicates whether the application was released in canary release mode.
     *
     *   `true`: The application was released in canary release mode.
     *   `false`: The application was not released in canary release mode
     *
     * @example false
     *
     * @var bool
     */
    public $canary;

    /**
     * @description The ID of the instance group to which the application is deployed.
     *
     * @example 93fdd228-*****-ed2ae98de18d
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the instance group to which the application is deployed.
     *
     * @example _DEFAULT_GROUP
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The labels of the node. The value is a JSON string.
     *
     * @example {"alibabacloud.com/nodepool-id":"np0*5b9377fa907","beta.kubernetes.io/arch":"amd64","beta.kubernetes.io/instance-type":"ecs.*","beta.kubernetes.io/os":"linux","failure-domain.beta.kubernetes.io/region":"cn-hangzhou","failure-domain.beta.kubernetes.io/zone":"cn-hangzhou-b","kubernetes.io/arch":"amd64","kubernetes.io/hostname":"cn-hangzhou*","kubernetes.io/os":"linux","node.kubernetes.io/instance-type":"ecs.*","topology.diskplugin.csi.alibabacloud.com/zone":"cn-hangzhou-b","topology.kubernetes.io/region":"cn-hangzhou","topology.kubernetes.io/zone":"cn-hangzhou-b"}
     *
     * @var string
     */
    public $nodeLabels;

    /**
     * @description The name of the node.
     *
     * @example cn-hangzhou.192.168.0.*
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The information about the pod. The value is a JSON string.
     *
     * @example {"metadata":{"name":"oambuild-group-1-*4xthz","generateName":"oambuild-group-*96-","namespace":"default","selfLink":"/api/v1/namespaces/default/pods/oambuild-grou*96-4xthz","uid":"7a23399c-*fe7ff4018","resourceVersion":"969614830","creationTimestamp":"2021-04-06T11:38:46Z","labels":{"ARMSApmAppId":"*","ARMSApmLicenseKey":"*"...
     *
     * @var string
     */
    public $podRaw;

    /**
     * @description The deployment package version of the node.
     *
     * @example 2021-04-06 19:37:42
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'appId'      => 'AppId',
        'canary'     => 'Canary',
        'groupId'    => 'GroupId',
        'groupName'  => 'GroupName',
        'nodeLabels' => 'NodeLabels',
        'nodeName'   => 'NodeName',
        'podRaw'     => 'PodRaw',
        'version'    => 'Version',
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
        if (null !== $this->canary) {
            $res['Canary'] = $this->canary;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->nodeLabels) {
            $res['NodeLabels'] = $this->nodeLabels;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->podRaw) {
            $res['PodRaw'] = $this->podRaw;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Canary'])) {
            $model->canary = $map['Canary'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['NodeLabels'])) {
            $model->nodeLabels = $map['NodeLabels'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['PodRaw'])) {
            $model->podRaw = $map['PodRaw'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
