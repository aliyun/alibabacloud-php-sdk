<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\BatchForbidVsStreamResponseBody\forbidResult\forbidResultInfo;

use AlibabaCloud\Dara\Model;

class channels extends Model
{
    /**
     * @var string[]
     */
    public $channel;
    protected $_name = [
        'channel' => 'Channel',
    ];

    public function validate()
    {
        if (\is_array($this->channel)) {
            Model::validateArray($this->channel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channel) {
            if (\is_array($this->channel)) {
                $res['Channel'] = [];
                $n1 = 0;
                foreach ($this->channel as $item1) {
                    $res['Channel'][$n1++] = $item1;
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
        if (isset($map['Channel'])) {
            if (!empty($map['Channel'])) {
                $model->channel = [];
                $n1 = 0;
                foreach ($map['Channel'] as $item1) {
                    $model->channel[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
