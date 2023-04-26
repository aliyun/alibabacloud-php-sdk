<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetMediaAuditResultDetailRequest extends Model
{
    /**
     * @description The category of the pornographic content review result. Valid values:
     *
     *   **normal**
     *   **porn**
     *   **sexy**
     *
     * @example 93ab850b4f6f*****54b6e91d24d81d4
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The score of the review result category. It is representative of the confidence. Valid values: `[0.00-100.00].` The value is rounded down to 10 decimal places.
     *
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
