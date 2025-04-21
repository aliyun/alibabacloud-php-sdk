<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\EvaluateVideoQualityResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\EvaluateVideoQualityResponseBody\data\videoQualityInfo;

class data extends Model
{
    /**
     * @var string
     */
    public $jsonUrl;

    /**
     * @var string
     */
    public $pdfUrl;

    /**
     * @var videoQualityInfo
     */
    public $videoQualityInfo;
    protected $_name = [
        'jsonUrl' => 'JsonUrl',
        'pdfUrl' => 'PdfUrl',
        'videoQualityInfo' => 'VideoQualityInfo',
    ];

    public function validate()
    {
        if (null !== $this->videoQualityInfo) {
            $this->videoQualityInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jsonUrl) {
            $res['JsonUrl'] = $this->jsonUrl;
        }

        if (null !== $this->pdfUrl) {
            $res['PdfUrl'] = $this->pdfUrl;
        }

        if (null !== $this->videoQualityInfo) {
            $res['VideoQualityInfo'] = null !== $this->videoQualityInfo ? $this->videoQualityInfo->toArray($noStream) : $this->videoQualityInfo;
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
        if (isset($map['JsonUrl'])) {
            $model->jsonUrl = $map['JsonUrl'];
        }

        if (isset($map['PdfUrl'])) {
            $model->pdfUrl = $map['PdfUrl'];
        }

        if (isset($map['VideoQualityInfo'])) {
            $model->videoQualityInfo = videoQualityInfo::fromMap($map['VideoQualityInfo']);
        }

        return $model;
    }
}
