<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetWatermarksConsoleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetWatermarksConsoleResponseBody\watermarkInfos\watermarkInfo;

class watermarkInfos extends Model
{
    /**
     * @var watermarkInfo[]
     */
    public $watermarkInfo;
    protected $_name = [
        'watermarkInfo' => 'WatermarkInfo',
    ];

    public function validate()
    {
        if (\is_array($this->watermarkInfo)) {
            Model::validateArray($this->watermarkInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->watermarkInfo) {
            if (\is_array($this->watermarkInfo)) {
                $res['WatermarkInfo'] = [];
                $n1 = 0;
                foreach ($this->watermarkInfo as $item1) {
                    $res['WatermarkInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['WatermarkInfo'])) {
            if (!empty($map['WatermarkInfo'])) {
                $model->watermarkInfo = [];
                $n1 = 0;
                foreach ($map['WatermarkInfo'] as $item1) {
                    $model->watermarkInfo[$n1] = watermarkInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
