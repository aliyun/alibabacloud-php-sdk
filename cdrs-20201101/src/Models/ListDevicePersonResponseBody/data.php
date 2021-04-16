<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListDevicePersonResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $targetPicUrlPath;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $freqNum;

    /**
     * @var string
     */
    public $personId;
    protected $_name = [
        'targetPicUrlPath' => 'TargetPicUrlPath',
        'gender'           => 'Gender',
        'dataSourceId'     => 'DataSourceId',
        'freqNum'          => 'FreqNum',
        'personId'         => 'PersonId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetPicUrlPath) {
            $res['TargetPicUrlPath'] = $this->targetPicUrlPath;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->freqNum) {
            $res['FreqNum'] = $this->freqNum;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
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
        if (isset($map['TargetPicUrlPath'])) {
            $model->targetPicUrlPath = $map['TargetPicUrlPath'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['FreqNum'])) {
            $model->freqNum = $map['FreqNum'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }

        return $model;
    }
}
