<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageInfoListRequest extends Model
{
    /**
     * @description The UUID of the server. Separate multiple UUIDs with commas (,).
     *
     * > You can call the [DescribeCloudCenterInstances](https://help.aliyun.com/document_detail/141932.html) operation to query the UUIDs of servers.
     *
     * This parameter is required.
     *
     * @example 391abd09184cbd3743d7f5ec125d****,
     * e6aeb2a5b6004479398b0bcd1160****
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'uuids' => 'Uuids',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageInfoListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
