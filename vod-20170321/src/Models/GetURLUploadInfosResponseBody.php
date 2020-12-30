<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetURLUploadInfosResponseBody\URLUploadInfoList;
use AlibabaCloud\Tea\Model;

class GetURLUploadInfosResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var URLUploadInfoList[]
     */
    public $URLUploadInfoList;

    /**
     * @var string[]
     */
    public $nonExists;
    protected $_name = [
        'requestId'         => 'RequestId',
        'URLUploadInfoList' => 'URLUploadInfoList',
        'nonExists'         => 'NonExists',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->nonExists) {
            $res['NonExists'] = $this->nonExists;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetURLUploadInfosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['NonExists'])) {
            if (!empty($map['NonExists'])) {
                $model->nonExists = $map['NonExists'];
            }
        }

        return $model;
    }
}
