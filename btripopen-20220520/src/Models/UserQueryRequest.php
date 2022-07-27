<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class UserQueryRequest extends Model
{
    /**
     * @var string
     */
    public $modifiedTimeGreaterOrEqualThan;

    /**
     * @var string
     */
    public $thirdPartCorpId;

    /**
     * @var string
     */
    public $thirdPartJobNo;

    /**
     * @var string
     */
    public $topAppKeyOwnerId;

    /**
     * @var string
     */
    public $topAuthorizedHavanaId;

    /**
     * @var string
     */
    public $topAuthorizedUserNick;
    protected $_name = [
        'modifiedTimeGreaterOrEqualThan' => 'modified_time_greater_or_equal_than',
        'thirdPartCorpId'                => 'third_part_corp_id',
        'thirdPartJobNo'                 => 'third_part_job_no',
        'topAppKeyOwnerId'               => 'top_app_key_owner_id',
        'topAuthorizedHavanaId'          => 'top_authorized_havana_id',
        'topAuthorizedUserNick'          => 'top_authorized_user_nick',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modifiedTimeGreaterOrEqualThan) {
            $res['modified_time_greater_or_equal_than'] = $this->modifiedTimeGreaterOrEqualThan;
        }
        if (null !== $this->thirdPartCorpId) {
            $res['third_part_corp_id'] = $this->thirdPartCorpId;
        }
        if (null !== $this->thirdPartJobNo) {
            $res['third_part_job_no'] = $this->thirdPartJobNo;
        }
        if (null !== $this->topAppKeyOwnerId) {
            $res['top_app_key_owner_id'] = $this->topAppKeyOwnerId;
        }
        if (null !== $this->topAuthorizedHavanaId) {
            $res['top_authorized_havana_id'] = $this->topAuthorizedHavanaId;
        }
        if (null !== $this->topAuthorizedUserNick) {
            $res['top_authorized_user_nick'] = $this->topAuthorizedUserNick;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UserQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['modified_time_greater_or_equal_than'])) {
            $model->modifiedTimeGreaterOrEqualThan = $map['modified_time_greater_or_equal_than'];
        }
        if (isset($map['third_part_corp_id'])) {
            $model->thirdPartCorpId = $map['third_part_corp_id'];
        }
        if (isset($map['third_part_job_no'])) {
            $model->thirdPartJobNo = $map['third_part_job_no'];
        }
        if (isset($map['top_app_key_owner_id'])) {
            $model->topAppKeyOwnerId = $map['top_app_key_owner_id'];
        }
        if (isset($map['top_authorized_havana_id'])) {
            $model->topAuthorizedHavanaId = $map['top_authorized_havana_id'];
        }
        if (isset($map['top_authorized_user_nick'])) {
            $model->topAuthorizedUserNick = $map['top_authorized_user_nick'];
        }

        return $model;
    }
}
