<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\EvaluateVideoQualityResponseBody;

use AlibabaCloud\SDK\Videorecog\V20200320\Models\EvaluateVideoQualityResponseBody\data\videoQualityInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://vibktprfx-prod-prod-damo-eas-cn-shanghai.oss-cn-shanghai.aliyuncs.com/eas-video-quality-assessment/2023-01-13-10/31%3A08-cVeN9ZQlzIPfGqsa.json?Expires=1673578869&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=AiSsOsZ7rYfhf9w3Mxn%2Fq4GKKy****
     *
     * @var string
     */
    public $jsonUrl;

    /**
     * @example http://vibktprfx-prod-prod-damo-eas-cn-shanghai.oss-cn-shanghai.aliyuncs.com/eas-video-quality-assessment/2023-01-13-10/31%3A08-cVeN9ZQlzIPfGqsa.pdf?Expires=1673578869&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=xULlZzVuhoYWAXRbp9A4EzzZcS****
     *
     * @var string
     */
    public $pdfUrl;

    /**
     * @var videoQualityInfo
     */
    public $videoQualityInfo;
    protected $_name = [
        'jsonUrl'          => 'JsonUrl',
        'pdfUrl'           => 'PdfUrl',
        'videoQualityInfo' => 'VideoQualityInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jsonUrl) {
            $res['JsonUrl'] = $this->jsonUrl;
        }
        if (null !== $this->pdfUrl) {
            $res['PdfUrl'] = $this->pdfUrl;
        }
        if (null !== $this->videoQualityInfo) {
            $res['VideoQualityInfo'] = null !== $this->videoQualityInfo ? $this->videoQualityInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
