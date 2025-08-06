<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetDailyPlayStatisResponseBody\dailyPlayStatisList;

class GetDailyPlayStatisResponseBody extends Model
{
    /**
     * @var dailyPlayStatisList[]
     */
    public $dailyPlayStatisList;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dailyPlayStatisList' => 'DailyPlayStatisList',
        'mediaId' => 'MediaId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->dailyPlayStatisList)) {
            Model::validateArray($this->dailyPlayStatisList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dailyPlayStatisList) {
            if (\is_array($this->dailyPlayStatisList)) {
                $res['DailyPlayStatisList'] = [];
                $n1 = 0;
                foreach ($this->dailyPlayStatisList as $item1) {
                    $res['DailyPlayStatisList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DailyPlayStatisList'])) {
            if (!empty($map['DailyPlayStatisList'])) {
                $model->dailyPlayStatisList = [];
                $n1 = 0;
                foreach ($map['DailyPlayStatisList'] as $item1) {
                    $model->dailyPlayStatisList[$n1] = dailyPlayStatisList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
