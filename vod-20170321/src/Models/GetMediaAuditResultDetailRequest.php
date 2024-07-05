<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetMediaAuditResultDetailRequest extends Model
{
    /**
     * @description The ID of the video.
     *
     * This parameter is required.
     * @example 93ab850b4f6f*****54b6e91d24d81d4
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The page number of the review result to return. The default value is **1**. A maximum of **20** records can be returned on each page.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $pageNo;
    protected $_name = [
        'mediaId' => 'MediaId',
        'pageNo'  => 'PageNo',
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
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMediaAuditResultDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        return $model;
    }
}
