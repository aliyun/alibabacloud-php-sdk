<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSharePermissionResponseBody\accounts;

use AlibabaCloud\Tea\Model;

class account extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 1234567890
     *
     * @var string
     */
    public $aliyunId;

    /**
     * @description The time when the image was shared. The time follows the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-01-01T12:05:00Z
     *
     * @var string
     */
    public $sharedTime;
    protected $_name = [
        'aliyunId'   => 'AliyunId',
        'sharedTime' => 'SharedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunId) {
            $res['AliyunId'] = $this->aliyunId;
        }
        if (null !== $this->sharedTime) {
            $res['SharedTime'] = $this->sharedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return account
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunId'])) {
            $model->aliyunId = $map['AliyunId'];
        }
        if (isset($map['SharedTime'])) {
            $model->sharedTime = $map['SharedTime'];
        }

        return $model;
    }
}
