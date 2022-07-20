<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetUrlUploadInfosResponseBody\URLUploadInfoList;
use AlibabaCloud\Tea\Model;

class GetUrlUploadInfosResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $nonExists;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var URLUploadInfoList[]
     */
    public $URLUploadInfoList;
    protected $_name = [
        'nonExists'         => 'NonExists',
        'requestId'         => 'RequestId',
        'URLUploadInfoList' => 'URLUploadInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nonExists) {
            $res['NonExists'] = $this->nonExists;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->URLUploadInfoList) {
            $res['URLUploadInfoList'] = [];
            if (null !== $this->URLUploadInfoList && \is_array($this->URLUploadInfoList)) {
                $n = 0;
                foreach ($this->URLUploadInfoList as $item) {
                    $res['URLUploadInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUrlUploadInfosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NonExists'])) {
            if (!empty($map['NonExists'])) {
                $model->nonExists = $map['NonExists'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['URLUploadInfoList'])) {
            if (!empty($map['URLUploadInfoList'])) {
                $model->URLUploadInfoList = [];
                $n                        = 0;
                foreach ($map['URLUploadInfoList'] as $item) {
                    $model->URLUploadInfoList[$n++] = null !== $item ? URLUploadInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
