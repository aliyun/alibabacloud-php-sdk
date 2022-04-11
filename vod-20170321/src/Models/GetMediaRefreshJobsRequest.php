<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetMediaRefreshJobsRequest extends Model
{
    /**
     * @description 媒资ID
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description 媒资刷新预热任务ID
     *
     * @var string
     */
    public $mediaRefreshJobId;
    protected $_name = [
        'mediaId'           => 'MediaId',
        'mediaRefreshJobId' => 'MediaRefreshJobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->mediaRefreshJobId) {
            $res['MediaRefreshJobId'] = $this->mediaRefreshJobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMediaRefreshJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaRefreshJobId'])) {
            $model->mediaRefreshJobId = $map['MediaRefreshJobId'];
        }

        return $model;
    }
}
