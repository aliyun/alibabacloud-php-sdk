<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetUrlUploadInfosResponseBody\URLUploadInfoList;
use AlibabaCloud\Tea\Model;

class GetUrlUploadInfosResponseBody extends Model
{
    /**
     * @description The job IDs or upload URLs that do not exist.
     *
     * @var string[]
     */
    public $nonExists;

    /**
     * @description The request ID.
     *
     * @example ******11-DB8D-4A9A-875B-275798******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details about URL-based upload jobs.
     *
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
