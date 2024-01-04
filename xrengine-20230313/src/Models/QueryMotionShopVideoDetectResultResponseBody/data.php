<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models\QueryMotionShopVideoDetectResultResponseBody;

use AlibabaCloud\SDK\XrEngine\V20230313\Models\QueryMotionShopVideoDetectResultResponseBody\data\detectResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var detectResult
     */
    public $detectResult;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $videoId;
    protected $_name = [
        'detectResult' => 'DetectResult',
        'status'       => 'Status',
        'videoId'      => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detectResult) {
            $res['DetectResult'] = null !== $this->detectResult ? $this->detectResult->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
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
        if (isset($map['DetectResult'])) {
            $model->detectResult = detectResult::fromMap($map['DetectResult']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
