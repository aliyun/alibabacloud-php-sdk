<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListCorpMetricsStatisticResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2286049969284580096
     *
     * @var string
     */
    public $corpId;

    /**
     * @example 2021-01-25
     *
     * @var string
     */
    public $dateId;

    /**
     * @example -1
     *
     * @var string
     */
    public $deviceGroupId;

    /**
     * @example -1
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example rvsvisual_10596_33010000991332551639_e4b6377762bb31b10c2538b3a57cc6e7_0001610333257656000000000
     *
     * @var string
     */
    public $personId;

    /**
     * @example tag_corp_day_gender_distribution
     *
     * @var string
     */
    public $tagCode;

    /**
     * @example 31
     *
     * @var string
     */
    public $tagMetrics;

    /**
     * @example 1
     *
     * @var string
     */
    public $tagValue;

    /**
     * @example -1
     *
     * @var string
     */
    public $userGroupId;
    protected $_name = [
        'corpId'        => 'CorpId',
        'dateId'        => 'DateId',
        'deviceGroupId' => 'DeviceGroupId',
        'deviceId'      => 'DeviceId',
        'personId'      => 'PersonId',
        'tagCode'       => 'TagCode',
        'tagMetrics'    => 'TagMetrics',
        'tagValue'      => 'TagValue',
        'userGroupId'   => 'UserGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->dateId) {
            $res['DateId'] = $this->dateId;
        }
        if (null !== $this->deviceGroupId) {
            $res['DeviceGroupId'] = $this->deviceGroupId;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->tagCode) {
            $res['TagCode'] = $this->tagCode;
        }
        if (null !== $this->tagMetrics) {
            $res['TagMetrics'] = $this->tagMetrics;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
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
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['DateId'])) {
            $model->dateId = $map['DateId'];
        }
        if (isset($map['DeviceGroupId'])) {
            $model->deviceGroupId = $map['DeviceGroupId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['TagCode'])) {
            $model->tagCode = $map['TagCode'];
        }
        if (isset($map['TagMetrics'])) {
            $model->tagMetrics = $map['TagMetrics'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        return $model;
    }
}
