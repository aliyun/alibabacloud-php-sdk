<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetSwimLaneListResponseBody;

use AlibabaCloud\Tea\Model;

class swimLaneList extends Model
{
    /**
     * @description The name of the lane group.
     *
     * @example test
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The traffic routing rule associated with the lane.
     *
     * @example [{"Domains":["*"],"RouteName":"r1","MatchRequest":{"Headers":[{"Name":"x-asm-prefer-tag","MatchingMode":"exact","MatchingContent":"s1"}],"URI":{"MatchingMode":"exact","MatchingContent":"/mock"}},"RouteDestinations":[{"Destination":{"Host":"mocka.default.svc.cluster.local","Subset":"s1"}}]},{"Domains":["*"],"RouteName":"hello","MatchRequest":{"Headers":[{"Name":"x-asm-prefer-tag","MatchingMode":"exact","MatchingContent":"s1"}],"URI":{"MatchingMode":"exact","MatchingContent":"/mocktest"}},"RouteDestinations":[{"Destination":{"Host":"mocka.default.svc.cluster.local","Subset":"s1"}}]}]
     *
     * @var string
     */
    public $ingressRule;

    /**
     * @description This parameter is deprecated.
     *
     * @example mocka.default.svc.cluster.local
     *
     * @var string
     */
    public $ingressService;

    /**
     * @description The label key of the associated service workload. Fixed value: `ASM_TRAFFIC_TAG`.
     *
     * @example ASM_TRAFFIC_TAG
     *
     * @var string
     */
    public $labelSelectorKey;

    /**
     * @description The label value of the associated service workload.``
     *
     * @example v1
     *
     * @var string
     */
    public $labelSelectorValue;

    /**
     * @description The name of the lane.
     *
     * @example s1
     *
     * @var string
     */
    public $name;

    /**
     * @description A list of services associated with the lane.
     *
     * @example ["sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mocka","sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockb","sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockc"]
     *
     * @var string
     */
    public $serviceList;
    protected $_name = [
        'groupName'          => 'GroupName',
        'ingressRule'        => 'IngressRule',
        'ingressService'     => 'IngressService',
        'labelSelectorKey'   => 'LabelSelectorKey',
        'labelSelectorValue' => 'LabelSelectorValue',
        'name'               => 'Name',
        'serviceList'        => 'ServiceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->ingressRule) {
            $res['IngressRule'] = $this->ingressRule;
        }
        if (null !== $this->ingressService) {
            $res['IngressService'] = $this->ingressService;
        }
        if (null !== $this->labelSelectorKey) {
            $res['LabelSelectorKey'] = $this->labelSelectorKey;
        }
        if (null !== $this->labelSelectorValue) {
            $res['LabelSelectorValue'] = $this->labelSelectorValue;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->serviceList) {
            $res['ServiceList'] = $this->serviceList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return swimLaneList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['IngressRule'])) {
            $model->ingressRule = $map['IngressRule'];
        }
        if (isset($map['IngressService'])) {
            $model->ingressService = $map['IngressService'];
        }
        if (isset($map['LabelSelectorKey'])) {
            $model->labelSelectorKey = $map['LabelSelectorKey'];
        }
        if (isset($map['LabelSelectorValue'])) {
            $model->labelSelectorValue = $map['LabelSelectorValue'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ServiceList'])) {
            $model->serviceList = $map['ServiceList'];
        }

        return $model;
    }
}
