<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetWatermarksConsoleResponseBody\watermarkInfos;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetWatermarksConsoleResponseBody\watermarks;

class GetWatermarksConsoleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var watermarkInfos
     */
    public $watermarkInfos;

    /**
     * @var watermarks
     */
    public $watermarks;
    protected $_name = [
        'requestId' => 'RequestId',
        'watermarkInfos' => 'WatermarkInfos',
        'watermarks' => 'Watermarks',
    ];

    public function validate()
    {
        if (null !== $this->watermarkInfos) {
            $this->watermarkInfos->validate();
        }
        if (null !== $this->watermarks) {
            $this->watermarks->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->watermarkInfos) {
            $res['WatermarkInfos'] = null !== $this->watermarkInfos ? $this->watermarkInfos->toArray($noStream) : $this->watermarkInfos;
        }

        if (null !== $this->watermarks) {
            $res['Watermarks'] = null !== $this->watermarks ? $this->watermarks->toArray($noStream) : $this->watermarks;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['WatermarkInfos'])) {
            $model->watermarkInfos = watermarkInfos::fromMap($map['WatermarkInfos']);
        }

        if (isset($map['Watermarks'])) {
            $model->watermarks = watermarks::fromMap($map['Watermarks']);
        }

        return $model;
    }
}
