<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DsgDesensPlanUpdateStatusRequest extends Model
{
    /**
     * @description A collection of IDs of the data masking rules of which the status you want to modify.
     *
     * This parameter is required.
     * @var int[]
     */
    public $ids;

    /**
     * @description The code of the level-1 data masking scenario to which the rule belongs. Valid values:
     *
     *   dataworks_display_desense_code: masking of displayed data in DataStudio and Data Map
     *   maxcompute_desense_code: data masking at the MaxCompute compute engine layer
     *   maxcompute_new_desense_code: data masking at the MaxCompute compute engine layer (new)
     *   hologres_display_desense_code: data masking at the Hologres compute engine layer
     *   dataworks_data_integration_desense_code: static data masking in Data Integration
     *   dataworks_analysis_desense_code: masking of displayed data in DataAnalysis
     *
     * This parameter is required.
     * @example dataworks_display_desense_code
     *
     * @var string
     */
    public $sceneCode;

    /**
     * @description The status of the data masking rule. Valid values:
     *
     *   0: expired
     *   1: effective
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'ids'       => 'Ids',
        'sceneCode' => 'SceneCode',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DsgDesensPlanUpdateStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ids'])) {
            if (!empty($map['Ids'])) {
                $model->ids = $map['Ids'];
            }
        }
        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
