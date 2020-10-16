<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListCorpGroupMetricsResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $dateId;

    /**
     * @var string
     */
    public $tagMetrics;

    /**
     * @var string
     */
    public $tagCode;

    /**
     * @var string
     */
    public $tagValue;

    /**
     * @var string
     */
    public $corpGroupId;

    /**
     * @var string
     */
    public $corpId;

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
    public $personID;
    protected $_name = [
        'dateId'        => 'DateId',
        'tagMetrics'    => 'TagMetrics',
        'tagCode'       => 'TagCode',
        'tagValue'      => 'TagValue',
        'corpGroupId'   => 'CorpGroupId',
        'corpId'        => 'CorpId',
        'deviceGroupId' => 'DeviceGroupId',
        'deviceId'      => 'DeviceId',
        'userGroupId'   => 'UserGroupId',
        'personID'      => 'PersonID',
    ];

    public function validate()
    {
        Model::validateRequired('dateId', $this->dateId, true);
        Model::validateRequired('tagMetrics', $this->tagMetrics, true);
        Model::validateRequired('tagCode', $this->tagCode, true);
        Model::validateRequired('tagValue', $this->tagValue, true);
        Model::validateRequired('corpGroupId', $this->corpGroupId, true);
        Model::validateRequired('corpId', $this->corpId, true);
        Model::validateRequired('deviceGroupId', $this->deviceGroupId, true);
        Model::validateRequired('deviceId', $this->deviceId, true);
        Model::validateRequired('userGroupId', $this->userGroupId, true);
        Model::validateRequired('personID', $this->personID, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dateId) {
            $res['DateId'] = $this->dateId;
        }
        if (null !== $this->tagMetrics) {
            $res['TagMetrics'] = $this->tagMetrics;
        }
        if (null !== $this->tagCode) {
            $res['TagCode'] = $this->tagCode;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }
        if (null !== $this->corpGroupId) {
            $res['CorpGroupId'] = $this->corpGroupId;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
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
        if (null !== $this->personID) {
            $res['PersonID'] = $this->personID;
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
        if (isset($map['DateId'])) {
            $model->dateId = $map['DateId'];
        }
        if (isset($map['TagMetrics'])) {
            $model->tagMetrics = $map['TagMetrics'];
        }
        if (isset($map['TagCode'])) {
            $model->tagCode = $map['TagCode'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }
        if (isset($map['CorpGroupId'])) {
            $model->corpGroupId = $map['CorpGroupId'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
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
        if (isset($map['PersonID'])) {
            $model->personID = $map['PersonID'];
        }

        return $model;
    }
}
