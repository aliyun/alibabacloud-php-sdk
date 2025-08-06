<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetKMSServiceKeyResponseBody\kmsKeyInfoList;

class GetKMSServiceKeyResponseBody extends Model
{
    /**
     * @var kmsKeyInfoList[]
     */
    public $kmsKeyInfoList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'kmsKeyInfoList' => 'KmsKeyInfoList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->kmsKeyInfoList)) {
            Model::validateArray($this->kmsKeyInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kmsKeyInfoList) {
            if (\is_array($this->kmsKeyInfoList)) {
                $res['KmsKeyInfoList'] = [];
                $n1 = 0;
                foreach ($this->kmsKeyInfoList as $item1) {
                    $res['KmsKeyInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['KmsKeyInfoList'])) {
            if (!empty($map['KmsKeyInfoList'])) {
                $model->kmsKeyInfoList = [];
                $n1 = 0;
                foreach ($map['KmsKeyInfoList'] as $item1) {
                    $model->kmsKeyInfoList[$n1] = kmsKeyInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
