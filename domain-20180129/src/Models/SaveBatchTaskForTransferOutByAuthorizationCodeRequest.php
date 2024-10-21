<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForTransferOutByAuthorizationCodeRequest\transferOutParamList;
use AlibabaCloud\Tea\Model;

class SaveBatchTaskForTransferOutByAuthorizationCodeRequest extends Model
{
    /**
     * @example en
     *
     * @var string
     */
    public $long;

    /**
     * @description This parameter is required.
     *
     * @var transferOutParamList[]
     */
    public $transferOutParamList;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'long'                 => 'Long',
        'transferOutParamList' => 'TransferOutParamList',
        'userClientIp'         => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->long) {
            $res['Long'] = $this->long;
        }
        if (null !== $this->transferOutParamList) {
            $res['TransferOutParamList'] = [];
            if (null !== $this->transferOutParamList && \is_array($this->transferOutParamList)) {
                $n = 0;
                foreach ($this->transferOutParamList as $item) {
                    $res['TransferOutParamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveBatchTaskForTransferOutByAuthorizationCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Long'])) {
            $model->long = $map['Long'];
        }
        if (isset($map['TransferOutParamList'])) {
            if (!empty($map['TransferOutParamList'])) {
                $model->transferOutParamList = [];
                $n                           = 0;
                foreach ($map['TransferOutParamList'] as $item) {
                    $model->transferOutParamList[$n++] = null !== $item ? transferOutParamList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
