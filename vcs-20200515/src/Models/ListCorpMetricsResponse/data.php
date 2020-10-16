<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListCorpMetricsResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $tagCode;

    /**
     * @var string
     */
    public $tagMetrics;

    /**
     * @var string
     */
    public $tagValue;

    /**
     * @var string
     */
    public $deviceGroupId;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $userGroupId;

    /**
     * @var string
     */
    public $personId;

    /**
     * @var string
     */
    public $dateId;
    protected $_name = [
        'corpId'        => 'CorpId',
        'tagCode'       => 'TagCode',
        'tagMetrics'    => 'TagMetrics',
        'tagValue'      => 'TagValue',
        'deviceGroupId' => 'DeviceGroupId',
        'deviceId'      => 'DeviceId',
        'userGroupId'   => 'UserGroupId',
        'personId'      => 'PersonId',
        'dateId'        => 'DateId',
    ];

    public function validate()
    {
        Model::validateRequired('corpId', $this->corpId, true);
        Model::validateRequired('tagCode', $this->tagCode, true);
        Model::validateRequired('tagMetrics', $this->tagMetrics, true);
        Model::validateRequired('tagValue', $this->tagValue, true);
        Model::validateRequired('deviceGroupId', $this->deviceGroupId, true);
        Model::validateRequired('deviceId', $this->deviceId, true);
        Model::validateRequired('userGroupId', $this->userGroupId, true);
        Model::validateRequired('personId', $this->personId, true);
        Model::validateRequired('dateId', $this->dateId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
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
        if (null !== $this->deviceGroupId) {
            $res['DeviceGroupId'] = $this->deviceGroupId;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->dateId) {
            $res['DateId'] = $this->dateId;
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
        if (isset($map['TagCode'])) {
            $model->tagCode = $map['TagCode'];
        }
        if (isset($map['TagMetrics'])) {
            $model->tagMetrics = $map['TagMetrics'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }
        if (isset($map['DeviceGroupId'])) {
            $model->deviceGroupId = $map['DeviceGroupId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['DateId'])) {
            $model->dateId = $map['DateId'];
        }

        return $model;
    }
}
