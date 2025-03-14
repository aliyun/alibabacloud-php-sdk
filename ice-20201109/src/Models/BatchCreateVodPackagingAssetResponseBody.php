<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\BatchCreateVodPackagingAssetResponseBody\resultList;
use AlibabaCloud\Tea\Model;

class BatchCreateVodPackagingAssetResponseBody extends Model
{
    /**
     * @description The name of the packaging group.
     *
     * @example vod_hls
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The ID of the request.
     *
     * @example ******3B-0E1A-586A-AC29-742247******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The results of asset ingestion.
     *
     * @var resultList[]
     */
    public $resultList;
    protected $_name = [
        'groupName' => 'GroupName',
        'requestId' => 'RequestId',
        'resultList' => 'ResultList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resultList) {
            $res['ResultList'] = [];
            if (null !== $this->resultList && \is_array($this->resultList)) {
                $n = 0;
                foreach ($this->resultList as $item) {
                    $res['ResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchCreateVodPackagingAssetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResultList'])) {
            if (!empty($map['ResultList'])) {
                $model->resultList = [];
                $n = 0;
                foreach ($map['ResultList'] as $item) {
                    $model->resultList[$n++] = null !== $item ? resultList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
