<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAppInfosResponseBody\appInfoList;

class GetAppInfosResponseBody extends Model
{
    /**
     * @var appInfoList[]
     */
    public $appInfoList;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string[]
     */
    public $nonExistAppIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appInfoList' => 'AppInfoList',
        'code' => 'Code',
        'nonExistAppIds' => 'NonExistAppIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->appInfoList)) {
            Model::validateArray($this->appInfoList);
        }
        if (\is_array($this->nonExistAppIds)) {
            Model::validateArray($this->nonExistAppIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInfoList) {
            if (\is_array($this->appInfoList)) {
                $res['AppInfoList'] = [];
                $n1 = 0;
                foreach ($this->appInfoList as $item1) {
                    $res['AppInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->nonExistAppIds) {
            if (\is_array($this->nonExistAppIds)) {
                $res['NonExistAppIds'] = [];
                $n1 = 0;
                foreach ($this->nonExistAppIds as $item1) {
                    $res['NonExistAppIds'][$n1++] = $item1;
                }
            }
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
        if (isset($map['AppInfoList'])) {
            if (!empty($map['AppInfoList'])) {
                $model->appInfoList = [];
                $n1 = 0;
                foreach ($map['AppInfoList'] as $item1) {
                    $model->appInfoList[$n1++] = appInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['NonExistAppIds'])) {
            if (!empty($map['NonExistAppIds'])) {
                $model->nonExistAppIds = [];
                $n1 = 0;
                foreach ($map['NonExistAppIds'] as $item1) {
                    $model->nonExistAppIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
