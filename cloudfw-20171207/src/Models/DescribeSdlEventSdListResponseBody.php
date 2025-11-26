<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeSdlEventSdListResponseBody\sdlEventSensitiveDataList;

class DescribeSdlEventSdListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sdlEventSensitiveDataList[]
     */
    public $sdlEventSensitiveDataList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'sdlEventSensitiveDataList' => 'SdlEventSensitiveDataList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->sdlEventSensitiveDataList)) {
            Model::validateArray($this->sdlEventSensitiveDataList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sdlEventSensitiveDataList) {
            if (\is_array($this->sdlEventSensitiveDataList)) {
                $res['SdlEventSensitiveDataList'] = [];
                $n1 = 0;
                foreach ($this->sdlEventSensitiveDataList as $item1) {
                    $res['SdlEventSensitiveDataList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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

        if (isset($map['SdlEventSensitiveDataList'])) {
            if (!empty($map['SdlEventSensitiveDataList'])) {
                $model->sdlEventSensitiveDataList = [];
                $n1 = 0;
                foreach ($map['SdlEventSensitiveDataList'] as $item1) {
                    $model->sdlEventSensitiveDataList[$n1] = sdlEventSensitiveDataList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
