<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamHistoryUserNumResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamHistoryUserNumResponseBody\liveStreamUserNumInfos\liveStreamUserNumInfo;

class liveStreamUserNumInfos extends Model
{
    /**
     * @var liveStreamUserNumInfo[]
     */
    public $liveStreamUserNumInfo;
    protected $_name = [
        'liveStreamUserNumInfo' => 'LiveStreamUserNumInfo',
    ];

    public function validate()
    {
        if (\is_array($this->liveStreamUserNumInfo)) {
            Model::validateArray($this->liveStreamUserNumInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveStreamUserNumInfo) {
            if (\is_array($this->liveStreamUserNumInfo)) {
                $res['LiveStreamUserNumInfo'] = [];
                $n1 = 0;
                foreach ($this->liveStreamUserNumInfo as $item1) {
                    $res['LiveStreamUserNumInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LiveStreamUserNumInfo'])) {
            if (!empty($map['LiveStreamUserNumInfo'])) {
                $model->liveStreamUserNumInfo = [];
                $n1 = 0;
                foreach ($map['LiveStreamUserNumInfo'] as $item1) {
                    $model->liveStreamUserNumInfo[$n1] = liveStreamUserNumInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
