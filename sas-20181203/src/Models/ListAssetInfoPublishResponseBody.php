<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListAssetInfoPublishResponseBody\assetList;
use AlibabaCloud\Tea\Model;

class ListAssetInfoPublishResponseBody extends Model
{
    /**
     * @description The servers.
     *
     * @var assetList[]
     */
    public $assetList;

    /**
     * @description The request ID.
     *
     * @example 3956048F-9D73-5EDB-834B-4827BB483977
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'assetList' => 'AssetList',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetList) {
            $res['AssetList'] = [];
            if (null !== $this->assetList && \is_array($this->assetList)) {
                $n = 0;
                foreach ($this->assetList as $item) {
                    $res['AssetList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAssetInfoPublishResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetList'])) {
            if (!empty($map['AssetList'])) {
                $model->assetList = [];
                $n = 0;
                foreach ($map['AssetList'] as $item) {
                    $model->assetList[$n++] = null !== $item ? assetList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
