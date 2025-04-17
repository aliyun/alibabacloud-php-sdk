<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class GetMediaAuditResultDetailRequest extends Model
{
    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var int
     */
    public $pageNo;
    protected $_name = [
        'mediaId' => 'MediaId',
        'pageNo' => 'PageNo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
