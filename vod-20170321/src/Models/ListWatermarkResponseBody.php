<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListWatermarkResponseBody\watermarkInfos;

class ListWatermarkResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var watermarkInfos[]
     */
    public $watermarkInfos;
    protected $_name = [
        'requestId' => 'RequestId',
        'watermarkInfos' => 'WatermarkInfos',
    ];

    public function validate()
    {
        if (\is_array($this->watermarkInfos)) {
            Model::validateArray($this->watermarkInfos);
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
            if (\is_array($this->watermarkInfos)) {
                $res['WatermarkInfos'] = [];
                $n1 = 0;
                foreach ($this->watermarkInfos as $item1) {
                    $res['WatermarkInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
            if (!empty($map['WatermarkInfos'])) {
                $model->watermarkInfos = [];
                $n1 = 0;
                foreach ($map['WatermarkInfos'] as $item1) {
                    $model->watermarkInfos[$n1++] = watermarkInfos::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
