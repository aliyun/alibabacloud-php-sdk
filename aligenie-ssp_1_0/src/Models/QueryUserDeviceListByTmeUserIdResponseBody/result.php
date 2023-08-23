<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\QueryUserDeviceListByTmeUserIdResponseBody;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\QueryUserDeviceListByTmeUserIdResponseBody\result\aligenieUserInfoList;
use AlibabaCloud\Tea\Model;

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
        'encodeKey'            => 'EncodeKey',
        'encodeType'           => 'EncodeType',
        'sp'                   => 'Sp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aligenieUserInfoList) {
            $res['AligenieUserInfoList'] = [];
            if (null !== $this->aligenieUserInfoList && \is_array($this->aligenieUserInfoList)) {
                $n = 0;
                foreach ($this->aligenieUserInfoList as $item) {
                    $res['AligenieUserInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AligenieUserInfoList'])) {
            if (!empty($map['AligenieUserInfoList'])) {
                $model->aligenieUserInfoList = [];
                $n                           = 0;
                foreach ($map['AligenieUserInfoList'] as $item) {
                    $model->aligenieUserInfoList[$n++] = null !== $item ? aligenieUserInfoList::fromMap($item) : $item;
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
