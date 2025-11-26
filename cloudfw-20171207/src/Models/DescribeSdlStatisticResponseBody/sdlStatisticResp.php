<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeSdlStatisticResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeSdlStatisticResponseBody\sdlStatisticResp\sdlAssetTopList;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeSdlStatisticResponseBody\sdlStatisticResp\sdlDstTopList;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeSdlStatisticResponseBody\sdlStatisticResp\sdlEventTypeCountList;

class sdlStatisticResp extends Model
{
    /**
     * @var sdlAssetTopList[]
     */
    public $sdlAssetTopList;

    /**
     * @var sdlDstTopList[]
     */
    public $sdlDstTopList;

    /**
     * @var sdlEventTypeCountList[]
     */
    public $sdlEventTypeCountList;
    protected $_name = [
        'sdlAssetTopList' => 'SdlAssetTopList',
        'sdlDstTopList' => 'SdlDstTopList',
        'sdlEventTypeCountList' => 'SdlEventTypeCountList',
    ];

    public function validate()
    {
        if (\is_array($this->sdlAssetTopList)) {
            Model::validateArray($this->sdlAssetTopList);
        }
        if (\is_array($this->sdlDstTopList)) {
            Model::validateArray($this->sdlDstTopList);
        }
        if (\is_array($this->sdlEventTypeCountList)) {
            Model::validateArray($this->sdlEventTypeCountList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sdlAssetTopList) {
            if (\is_array($this->sdlAssetTopList)) {
                $res['SdlAssetTopList'] = [];
                $n1 = 0;
                foreach ($this->sdlAssetTopList as $item1) {
                    $res['SdlAssetTopList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sdlDstTopList) {
            if (\is_array($this->sdlDstTopList)) {
                $res['SdlDstTopList'] = [];
                $n1 = 0;
                foreach ($this->sdlDstTopList as $item1) {
                    $res['SdlDstTopList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sdlEventTypeCountList) {
            if (\is_array($this->sdlEventTypeCountList)) {
                $res['SdlEventTypeCountList'] = [];
                $n1 = 0;
                foreach ($this->sdlEventTypeCountList as $item1) {
                    $res['SdlEventTypeCountList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SdlAssetTopList'])) {
            if (!empty($map['SdlAssetTopList'])) {
                $model->sdlAssetTopList = [];
                $n1 = 0;
                foreach ($map['SdlAssetTopList'] as $item1) {
                    $model->sdlAssetTopList[$n1] = sdlAssetTopList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SdlDstTopList'])) {
            if (!empty($map['SdlDstTopList'])) {
                $model->sdlDstTopList = [];
                $n1 = 0;
                foreach ($map['SdlDstTopList'] as $item1) {
                    $model->sdlDstTopList[$n1] = sdlDstTopList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SdlEventTypeCountList'])) {
            if (!empty($map['SdlEventTypeCountList'])) {
                $model->sdlEventTypeCountList = [];
                $n1 = 0;
                foreach ($map['SdlEventTypeCountList'] as $item1) {
                    $model->sdlEventTypeCountList[$n1] = sdlEventTypeCountList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
