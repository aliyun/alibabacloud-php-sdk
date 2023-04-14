<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\GroupUserSaveRequest;

use AlibabaCloud\Tea\Model;

class subCorpIdList extends Model
{
    /**
     * @var string[]
     */
    public $departIds;

    /**
     * @example 123
     *
     * @var string
     */
    public $managerUserId;

    /**
     * @example btrip123
     *
     * @var string
     */
    public $subCorpId;
    protected $_name = [
        'departIds'     => 'depart_ids',
        'managerUserId' => 'manager_user_id',
        'subCorpId'     => 'sub_corp_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->departIds) {
            $res['depart_ids'] = $this->departIds;
        }
        if (null !== $this->managerUserId) {
            $res['manager_user_id'] = $this->managerUserId;
        }
        if (null !== $this->subCorpId) {
            $res['sub_corp_id'] = $this->subCorpId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subCorpIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['depart_ids'])) {
            if (!empty($map['depart_ids'])) {
                $model->departIds = $map['depart_ids'];
            }
        }
        if (isset($map['manager_user_id'])) {
            $model->managerUserId = $map['manager_user_id'];
        }
        if (isset($map['sub_corp_id'])) {
            $model->subCorpId = $map['sub_corp_id'];
        }

        return $model;
    }
}
