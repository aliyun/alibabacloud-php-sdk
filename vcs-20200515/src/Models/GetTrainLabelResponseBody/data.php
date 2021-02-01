<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetTrainLabelResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $ID;

    /**
     * @var string
     */
    public $labelName;

    /**
     * @var string
     */
    public $algorithmId;

    /**
     * @var int
     */
    public $trainMarkerCnt;

    /**
     * @var int
     */
    public $testMarkerCnt;

    /**
     * @var string
     */
    public $deleted;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;
    protected $_name = [
        'ID'             => 'ID',
        'labelName'      => 'LabelName',
        'algorithmId'    => 'AlgorithmId',
        'trainMarkerCnt' => 'TrainMarkerCnt',
        'testMarkerCnt'  => 'TestMarkerCnt',
        'deleted'        => 'Deleted',
        'gmtCreated'     => 'GmtCreated',
        'gmtModified'    => 'GmtModified',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ID) {
            $res['ID'] = $this->ID;
        }
        if (null !== $this->labelName) {
            $res['LabelName'] = $this->labelName;
        }
        if (null !== $this->algorithmId) {
            $res['AlgorithmId'] = $this->algorithmId;
        }
        if (null !== $this->trainMarkerCnt) {
            $res['TrainMarkerCnt'] = $this->trainMarkerCnt;
        }
        if (null !== $this->testMarkerCnt) {
            $res['TestMarkerCnt'] = $this->testMarkerCnt;
        }
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
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
        if (isset($map['ID'])) {
            $model->ID = $map['ID'];
        }
        if (isset($map['LabelName'])) {
            $model->labelName = $map['LabelName'];
        }
        if (isset($map['AlgorithmId'])) {
            $model->algorithmId = $map['AlgorithmId'];
        }
        if (isset($map['TrainMarkerCnt'])) {
            $model->trainMarkerCnt = $map['TrainMarkerCnt'];
        }
        if (isset($map['TestMarkerCnt'])) {
            $model->testMarkerCnt = $map['TestMarkerCnt'];
        }
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        return $model;
    }
}
