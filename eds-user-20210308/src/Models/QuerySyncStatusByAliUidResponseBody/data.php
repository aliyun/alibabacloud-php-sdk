<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\QuerySyncStatusByAliUidResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 131239236086****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @example cdrs948144195608****
     *
     * @var string
     */
    public $corpId;

    /**
     * @example 2020-06-30 07:50:42
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @example 2022-03-02 14:27:39
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 18500
     *
     * @var int
     */
    public $id;

    /**
     * @example 2022-03-02 14:31:39
     *
     * @var string
     */
    public $latestBeginTime;

    /**
     * @example 2022-03-02 16:13:12
     *
     * @var string
     */
    public $latestEndTime;

    /**
     * @example 2022-03-02 18:24:01
     *
     * @var string
     */
    public $latestSuccessTime;

    /**
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'aliUid'            => 'AliUid',
        'corpId'            => 'CorpId',
        'gmtCreated'        => 'GmtCreated',
        'gmtModified'       => 'GmtModified',
        'id'                => 'Id',
        'latestBeginTime'   => 'LatestBeginTime',
        'latestEndTime'     => 'LatestEndTime',
        'latestSuccessTime' => 'LatestSuccessTime',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
