<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\SDK\Pds\V20220301\Models\InvestigationInfo\videoDetail;
use AlibabaCloud\Tea\Model;

class InvestigationInfo extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var videoDetail
     */
    public $videoDetail;
    protected $_name = [
        'status'      => 'status',
        'suggestion'  => 'suggestion',
        'videoDetail' => 'video_detail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->suggestion) {
            $res['suggestion'] = $this->suggestion;
        }
        if (null !== $this->videoDetail) {
            $res['video_detail'] = null !== $this->videoDetail ? $this->videoDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvestigationInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['suggestion'])) {
            $model->suggestion = $map['suggestion'];
        }
        if (isset($map['video_detail'])) {
            $model->videoDetail = videoDetail::fromMap($map['video_detail']);
        }

        return $model;
    }
}
