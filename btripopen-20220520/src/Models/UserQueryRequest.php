<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class UserQueryRequest extends Model
{
    /**
     * @example 2021-06-02 00:00:00
     *
     * @var string
     */
    public $modifiedTimeGreaterOrEqualThan;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 9YN+jxa7PcxbNUTISeKjEw==
     *
     * @var string
     */
    public $pageToken;

    /**
     * @example 12345
     *
     * @var string
     */
    public $thirdPartJobNo;
    protected $_name = [
        'modifiedTimeGreaterOrEqualThan' => 'modified_time_greater_or_equal_than',
        'pageSize'                       => 'page_size',
        'pageToken'                      => 'page_token',
        'thirdPartJobNo'                 => 'third_part_job_no',
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
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->pageToken) {
            $res['page_token'] = $this->pageToken;
        }
        if (null !== $this->thirdPartJobNo) {
            $res['third_part_job_no'] = $this->thirdPartJobNo;
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
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }
        if (isset($map['page_token'])) {
            $model->pageToken = $map['page_token'];
        }
        if (isset($map['third_part_job_no'])) {
            $model->thirdPartJobNo = $map['third_part_job_no'];
        }

        return $model;
    }
}
