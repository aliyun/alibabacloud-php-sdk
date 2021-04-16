<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListCityMapPersonFlowResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $flowNumber;

    /**
     * @var string
     */
    public $originDataSourceId;

    /**
     * @var string
     */
    public $targetDataSourceId;

    /**
     * @var string
     */
    public $flowDirection;
    protected $_name = [
        'flowNumber'         => 'FlowNumber',
        'originDataSourceId' => 'OriginDataSourceId',
        'targetDataSourceId' => 'TargetDataSourceId',
        'flowDirection'      => 'FlowDirection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowNumber) {
            $res['FlowNumber'] = $this->flowNumber;
        }
        if (null !== $this->originDataSourceId) {
            $res['OriginDataSourceId'] = $this->originDataSourceId;
        }
        if (null !== $this->targetDataSourceId) {
            $res['TargetDataSourceId'] = $this->targetDataSourceId;
        }
        if (null !== $this->flowDirection) {
            $res['FlowDirection'] = $this->flowDirection;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowNumber'])) {
            $model->flowNumber = $map['FlowNumber'];
        }
        if (isset($map['OriginDataSourceId'])) {
            $model->originDataSourceId = $map['OriginDataSourceId'];
        }
        if (isset($map['TargetDataSourceId'])) {
            $model->targetDataSourceId = $map['TargetDataSourceId'];
        }
        if (isset($map['FlowDirection'])) {
            $model->flowDirection = $map['FlowDirection'];
        }

        return $model;
    }
}
