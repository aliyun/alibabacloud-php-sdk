<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class ListApplyLinkMicUsersRequest extends Model
{
    /**
     * @description 会议唯一标识符
     *
     * @var string
     */
    public $conferenceId;

    /**
     * @description 查询页码，从第1页开始。
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 每页显示个数，最大显示个数为100。
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'conferenceId' => 'ConferenceId',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conferenceId) {
            $res['ConferenceId'] = $this->conferenceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApplyLinkMicUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConferenceId'])) {
            $model->conferenceId = $map['ConferenceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
