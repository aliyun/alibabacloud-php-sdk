<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class UpdateSwimLaneRequest extends Model
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
     * @description The label key of the associated service workload. Set the value to `ASM_TRAFFIC_TAG`.
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
     * @description The ID of the Service Mesh (ASM) instance.
     *
     * @example xxx
     *
     * @var string
     */
    public $serviceMeshId;

    /**
     * @description A list of services associated with the lane.
     *
     * @example ["sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mocka","sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockb","sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockc"]
     *
     * @var string
     */
    public $servicesList;

    /**
     * @description The name of the lane.
     *
     * @example s1
     *
     * @var string
     */
    public $swimLaneName;
    protected $_name = [
        'groupName'          => 'GroupName',
        'labelSelectorKey'   => 'LabelSelectorKey',
        'labelSelectorValue' => 'LabelSelectorValue',
        'serviceMeshId'      => 'ServiceMeshId',
        'servicesList'       => 'ServicesList',
        'swimLaneName'       => 'SwimLaneName',
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
        if (null !== $this->labelSelectorKey) {
            $res['LabelSelectorKey'] = $this->labelSelectorKey;
        }
        if (null !== $this->labelSelectorValue) {
            $res['LabelSelectorValue'] = $this->labelSelectorValue;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->servicesList) {
            $res['ServicesList'] = $this->servicesList;
        }
        if (null !== $this->swimLaneName) {
            $res['SwimLaneName'] = $this->swimLaneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSwimLaneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['LabelSelectorKey'])) {
            $model->labelSelectorKey = $map['LabelSelectorKey'];
        }
        if (isset($map['LabelSelectorValue'])) {
            $model->labelSelectorValue = $map['LabelSelectorValue'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['ServicesList'])) {
            $model->servicesList = $map['ServicesList'];
        }
        if (isset($map['SwimLaneName'])) {
            $model->swimLaneName = $map['SwimLaneName'];
        }

        return $model;
    }
}
