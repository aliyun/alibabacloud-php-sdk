<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAISubtitleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAISubtitleResponseBody\subtitleConfigs\subtitleConfig;

class subtitleConfigs extends Model
{
    /**
     * @var subtitleConfig[]
     */
    public $subtitleConfig;
    protected $_name = [
        'subtitleConfig' => 'SubtitleConfig',
    ];

    public function validate()
    {
        if (\is_array($this->subtitleConfig)) {
            Model::validateArray($this->subtitleConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subtitleConfig) {
            if (\is_array($this->subtitleConfig)) {
                $res['SubtitleConfig'] = [];
                $n1 = 0;
                foreach ($this->subtitleConfig as $item1) {
                    $res['SubtitleConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SubtitleConfig'])) {
            if (!empty($map['SubtitleConfig'])) {
                $model->subtitleConfig = [];
                $n1 = 0;
                foreach ($map['SubtitleConfig'] as $item1) {
                    $model->subtitleConfig[$n1] = subtitleConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
