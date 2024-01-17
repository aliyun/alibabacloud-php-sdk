<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetNotifyMeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example act-xxaanfaf
     *
     * @var string
     */
    public $activityId;

    /**
     * @example APP_XCxxx
     *
     * @var string
     */
    public $appType;

    /**
     * @example corpIdxxx
     *
     * @var string
     */
    public $corpId;

    /**
     * @example 2020-01-01
     *
     * @var string
     */
    public $createTimeGMT;

    /**
     * @example 123456
     *
     * @var string
     */
    public $creatorUserId;

    /**
     * @example formxxxx
     *
     * @var string
     */
    public $formInstanceId;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $instStatus;

    /**
     * @example mobileUrlexample
     *
     * @var string
     */
    public $mobileUrl;

    /**
     * @example 2020-01-01
     *
     * @var string
     */
    public $modifiedTimeGMT;
    protected $_name = [
        'activityId'      => 'ActivityId',
        'appType'         => 'AppType',
        'corpId'          => 'CorpId',
        'createTimeGMT'   => 'CreateTimeGMT',
        'creatorUserId'   => 'CreatorUserId',
        'formInstanceId'  => 'FormInstanceId',
        'instStatus'      => 'InstStatus',
        'mobileUrl'       => 'MobileUrl',
        'modifiedTimeGMT' => 'ModifiedTimeGMT',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->createTimeGMT) {
            $res['CreateTimeGMT'] = $this->createTimeGMT;
        }
        if (null !== $this->creatorUserId) {
            $res['CreatorUserId'] = $this->creatorUserId;
        }
        if (null !== $this->formInstanceId) {
            $res['FormInstanceId'] = $this->formInstanceId;
        }
        if (null !== $this->instStatus) {
            $res['InstStatus'] = $this->instStatus;
        }
        if (null !== $this->mobileUrl) {
            $res['MobileUrl'] = $this->mobileUrl;
        }
        if (null !== $this->modifiedTimeGMT) {
            $res['ModifiedTimeGMT'] = $this->modifiedTimeGMT;
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
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['CreateTimeGMT'])) {
            $model->createTimeGMT = $map['CreateTimeGMT'];
        }
        if (isset($map['CreatorUserId'])) {
            $model->creatorUserId = $map['CreatorUserId'];
        }
        if (isset($map['FormInstanceId'])) {
            $model->formInstanceId = $map['FormInstanceId'];
        }
        if (isset($map['InstStatus'])) {
            $model->instStatus = $map['InstStatus'];
        }
        if (isset($map['MobileUrl'])) {
            $model->mobileUrl = $map['MobileUrl'];
        }
        if (isset($map['ModifiedTimeGMT'])) {
            $model->modifiedTimeGMT = $map['ModifiedTimeGMT'];
        }

        return $model;
    }
}
