<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\QueryUserDeviceListByTmeUserIdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\QueryUserDeviceListByTmeUserIdResponseBody\result\aligenieUserInfoList;

class result extends Model
{
    /**
     * @var aligenieUserInfoList[]
     */
    public $aligenieUserInfoList;

    /**
     * @var string
     */
    public $encodeKey;

    /**
     * @var string
     */
    public $encodeType;

    /**
     * @var string
     */
    public $sp;
    protected $_name = [
        'aligenieUserInfoList' => 'AligenieUserInfoList',
        'encodeKey' => 'EncodeKey',
        'encodeType' => 'EncodeType',
        'sp' => 'Sp',
    ];

    public function validate()
    {
        if (\is_array($this->aligenieUserInfoList)) {
            Model::validateArray($this->aligenieUserInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aligenieUserInfoList) {
            if (\is_array($this->aligenieUserInfoList)) {
                $res['AligenieUserInfoList'] = [];
                $n1 = 0;
                foreach ($this->aligenieUserInfoList as $item1) {
                    $res['AligenieUserInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->encodeKey) {
            $res['EncodeKey'] = $this->encodeKey;
        }

        if (null !== $this->encodeType) {
            $res['EncodeType'] = $this->encodeType;
        }

        if (null !== $this->sp) {
            $res['Sp'] = $this->sp;
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
        if (isset($map['AligenieUserInfoList'])) {
            if (!empty($map['AligenieUserInfoList'])) {
                $model->aligenieUserInfoList = [];
                $n1 = 0;
                foreach ($map['AligenieUserInfoList'] as $item1) {
                    $model->aligenieUserInfoList[$n1] = aligenieUserInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EncodeKey'])) {
            $model->encodeKey = $map['EncodeKey'];
        }

        if (isset($map['EncodeType'])) {
            $model->encodeType = $map['EncodeType'];
        }

        if (isset($map['Sp'])) {
            $model->sp = $map['Sp'];
        }

        return $model;
    }
}
