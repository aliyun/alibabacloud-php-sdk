<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class UpdateSwimLaneRequest extends Model
{
    /**
     * @var string
     */
    public $addedServicesList;

    /**
     * @var string
     */
    public $deletedServicesList;

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
    public $swimLaneName;
    protected $_name = [
        'addedServicesList'   => 'AddedServicesList',
        'deletedServicesList' => 'DeletedServicesList',
        'labelSelectorKey'    => 'LabelSelectorKey',
        'labelSelectorValue'  => 'LabelSelectorValue',
        'serviceMeshId'       => 'ServiceMeshId',
        'swimLaneName'        => 'SwimLaneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addedServicesList) {
            $res['AddedServicesList'] = $this->addedServicesList;
        }
        if (null !== $this->deletedServicesList) {
            $res['DeletedServicesList'] = $this->deletedServicesList;
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
        if (isset($map['AddedServicesList'])) {
            $model->addedServicesList = $map['AddedServicesList'];
        }
        if (isset($map['DeletedServicesList'])) {
            $model->deletedServicesList = $map['DeletedServicesList'];
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
        if (isset($map['SwimLaneName'])) {
            $model->swimLaneName = $map['SwimLaneName'];
        }

        return $model;
    }
}
