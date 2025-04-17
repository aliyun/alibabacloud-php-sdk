<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponseBody\playInfoList\playInfo;

class playInfoList extends Model
{
    /**
     * @var playInfo[]
     */
    public $playInfo;
    protected $_name = [
        'playInfo' => 'PlayInfo',
    ];

    public function validate()
    {
        if (\is_array($this->playInfo)) {
            Model::validateArray($this->playInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->playInfo) {
            if (\is_array($this->playInfo)) {
                $res['PlayInfo'] = [];
                $n1 = 0;
                foreach ($this->playInfo as $item1) {
                    $res['PlayInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PlayInfo'])) {
            if (!empty($map['PlayInfo'])) {
                $model->playInfo = [];
                $n1 = 0;
                foreach ($map['PlayInfo'] as $item1) {
                    $model->playInfo[$n1++] = playInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
