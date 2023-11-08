<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class GetSwimLaneDetailResponseBody extends Model
{
    /**
     * @description The traffic routing rule that routes traffic to the lane by using the ingress gateway. The traffic routing rule contains one or more custom routes.
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
     * @description The label key of the associated service workload. The value is fixed as **ASM_TRAFFIC_TAG**.
     *
     * @example ASM_TRAFFIC_TAG
     *
     * @var string
     */
    public $labelSelectorKey;

    /**
     * @description The value of ASM_TRAFFIC_TAG.
     *
     * @example v1
     *
     * @var string
     */
    public $labelSelectorValue;

    /**
     * @description The request ID.
     *
     * @example yyyy
     *
     * @var string
     */
    public $requestId;

    /**
     * @description A list of services associated with the lane.
     *
     * @example ["sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mocka","sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockb","sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockc"]
     *
     * @var string
     */
    public $servicesList;
    protected $_name = [
        'ingressRule'        => 'IngressRule',
        'ingressService'     => 'IngressService',
        'labelSelectorKey'   => 'LabelSelectorKey',
        'labelSelectorValue' => 'LabelSelectorValue',
        'requestId'          => 'RequestId',
        'servicesList'       => 'ServicesList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->servicesList) {
            $res['ServicesList'] = $this->servicesList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSwimLaneDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServicesList'])) {
            $model->servicesList = $map['ServicesList'];
        }

        return $model;
    }
}
