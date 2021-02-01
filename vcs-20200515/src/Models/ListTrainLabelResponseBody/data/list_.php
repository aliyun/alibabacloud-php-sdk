<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListTrainLabelResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $id;

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
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;
    protected $_name = [
        'id'             => 'Id',
        'labelName'      => 'LabelName',
        'algorithmId'    => 'AlgorithmId',
        'trainMarkerCnt' => 'TrainMarkerCnt',
        'testMarkerCnt'  => 'TestMarkerCnt',
        'deleted'        => 'Deleted',
        'gmtCreate'      => 'GmtCreate',
        'gmtModified'    => 'GmtModified',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        return $model;
    }
}
