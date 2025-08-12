<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\QuerySyncStatusByAliUidResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $latestBeginTime;

    /**
     * @var string
     */
    public $latestEndTime;

    /**
     * @var string
     */
    public $latestSuccessTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'aliUid' => 'AliUid',
        'corpId' => 'CorpId',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'latestBeginTime' => 'LatestBeginTime',
        'latestEndTime' => 'LatestEndTime',
        'latestSuccessTime' => 'LatestSuccessTime',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->latestBeginTime) {
            $res['LatestBeginTime'] = $this->latestBeginTime;
        }

        if (null !== $this->latestEndTime) {
            $res['LatestEndTime'] = $this->latestEndTime;
        }

        if (null !== $this->latestSuccessTime) {
            $res['LatestSuccessTime'] = $this->latestSuccessTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LatestBeginTime'])) {
            $model->latestBeginTime = $map['LatestBeginTime'];
        }

        if (isset($map['LatestEndTime'])) {
            $model->latestEndTime = $map['LatestEndTime'];
        }

        if (isset($map['LatestSuccessTime'])) {
            $model->latestSuccessTime = $map['LatestSuccessTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
