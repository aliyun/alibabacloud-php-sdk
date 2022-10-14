<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class CreateSwimLaneRequest extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $labelSelectorKey;

    /**
     * @var string
     */
    public $labelSelectorValue;

    /**
     * @var string
     */
    public $serviceMeshId;

    /**
     * @var string
     */
    public $servicesList;

    /**
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
     * @return CreateSwimLaneRequest
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
