<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordVodConfigsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordVodConfigsResponseBody\liveRecordVodConfigs\liveRecordVodConfig;

class liveRecordVodConfigs extends Model
{
    /**
     * @var liveRecordVodConfig[]
     */
    public $liveRecordVodConfig;
    protected $_name = [
        'liveRecordVodConfig' => 'LiveRecordVodConfig',
    ];

    public function validate()
    {
        if (\is_array($this->liveRecordVodConfig)) {
            Model::validateArray($this->liveRecordVodConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveRecordVodConfig) {
            if (\is_array($this->liveRecordVodConfig)) {
                $res['LiveRecordVodConfig'] = [];
                $n1 = 0;
                foreach ($this->liveRecordVodConfig as $item1) {
                    $res['LiveRecordVodConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LiveRecordVodConfig'])) {
            if (!empty($map['LiveRecordVodConfig'])) {
                $model->liveRecordVodConfig = [];
                $n1 = 0;
                foreach ($map['LiveRecordVodConfig'] as $item1) {
                    $model->liveRecordVodConfig[$n1] = liveRecordVodConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
