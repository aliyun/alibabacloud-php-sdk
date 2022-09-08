<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksBloodRelationshipResponseBody\result;

use AlibabaCloud\Tea\Model;

class queryParams extends Model
{
    /**
     * @var string
     */
    public $areaId;

    /**
     * @var string
     */
    public $areaName;

    /**
     * @var string
     */
    public $caption;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var bool
     */
    public $isMeasure;

    /**
     * @var string
     */
    public $pathId;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'areaId'    => 'AreaId',
        'areaName'  => 'AreaName',
        'caption'   => 'Caption',
        'dataType'  => 'DataType',
        'isMeasure' => 'IsMeasure',
        'pathId'    => 'PathId',
        'uid'       => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->areaId) {
            $res['AreaId'] = $this->areaId;
        }
        if (null !== $this->areaName) {
            $res['AreaName'] = $this->areaName;
        }
        if (null !== $this->caption) {
            $res['Caption'] = $this->caption;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->isMeasure) {
            $res['IsMeasure'] = $this->isMeasure;
        }
        if (null !== $this->pathId) {
            $res['PathId'] = $this->pathId;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queryParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AreaId'])) {
            $model->areaId = $map['AreaId'];
        }
        if (isset($map['AreaName'])) {
            $model->areaName = $map['AreaName'];
        }
        if (isset($map['Caption'])) {
            $model->caption = $map['Caption'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['IsMeasure'])) {
            $model->isMeasure = $map['IsMeasure'];
        }
        if (isset($map['PathId'])) {
            $model->pathId = $map['PathId'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
