<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListDevicePersonResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 33011000991317100041
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @example 100
     *
     * @var string
     */
    public $freqNum;

    /**
     * @example 2
     *
     * @var string
     */
    public $gender;

    /**
     * @example rvsvisual_10596_33010000991332551639_e4b6377762bb31b10c2538b3a57cc6e7_0001610333257656000000000
     *
     * @var string
     */
    public $personId;

    /**
     * @example https://www.aliyunvcs.cn/vcs/image/vcs-pic-hd2vc/9f34_3301000099543201659_1/20210122/184812_PYjHiF3YkV.jpg?region=huadong2-zy
     *
     * @var string
     */
    public $targetPicUrlPath;
    protected $_name = [
        'dataSourceId'     => 'DataSourceId',
        'freqNum'          => 'FreqNum',
        'gender'           => 'Gender',
        'personId'         => 'PersonId',
        'targetPicUrlPath' => 'TargetPicUrlPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->freqNum) {
            $res['FreqNum'] = $this->freqNum;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->targetPicUrlPath) {
            $res['TargetPicUrlPath'] = $this->targetPicUrlPath;
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
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['FreqNum'])) {
            $model->freqNum = $map['FreqNum'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['TargetPicUrlPath'])) {
            $model->targetPicUrlPath = $map['TargetPicUrlPath'];
        }

        return $model;
    }
}
