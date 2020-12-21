<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListCorpMetricsResponseBody;

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
    public $tagCode;

    /**
     * @var string
     */
    public $corpId;

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
    public $personId;
    protected $_name = [
        'dateId'        => 'DateId',
        'deviceGroupId' => 'DeviceGroupId',
        'deviceId'      => 'DeviceId',
        'userGroupId'   => 'UserGroupId',
        'tagCode'       => 'TagCode',
        'corpId'        => 'CorpId',
        'tagMetrics'    => 'TagMetrics',
        'tagValue'      => 'TagValue',
        'personId'      => 'PersonId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dateId) {
            $res['DateId'] = $this->dateId;
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
        if (null !== $this->tagCode) {
            $res['TagCode'] = $this->tagCode;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->tagMetrics) {
            $res['TagMetrics'] = $this->tagMetrics;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
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
        if (isset($map['DateId'])) {
            $model->dateId = $map['DateId'];
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
        if (isset($map['TagCode'])) {
            $model->tagCode = $map['TagCode'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['TagMetrics'])) {
            $model->tagMetrics = $map['TagMetrics'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }

        return $model;
    }
}
