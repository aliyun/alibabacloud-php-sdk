<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList;
use AlibabaCloud\Tea\Model;

class SearchMediaResponseBody extends Model
{
    /**
     * @description The status of the audio file. Valid values:
     *
     *   **Uploading**
     *   **Normal**
     *   **UploadFail**
     *   **Deleted**
     *
     * @var mediaList[]
     */
    public $mediaList;

    /**
     * @description The tags of the audio file.
     *
     * @example 3E0CEF83-FB09-4E34-BA1451814B03****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The title of the auxiliary media asset.
     *
     * @example 24e0fba7188fae707e146esa54****
     *
     * @var string
     */
    public $scrollToken;

    /**
     * @description [Details about image files](~~86991~~).
     *
     * @example 10
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'mediaList'   => 'MediaList',
        'requestId'   => 'RequestId',
        'scrollToken' => 'ScrollToken',
        'total'       => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaList) {
            $res['MediaList'] = [];
            if (null !== $this->mediaList && \is_array($this->mediaList)) {
                $n = 0;
                foreach ($this->mediaList as $item) {
                    $res['MediaList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scrollToken) {
            $res['ScrollToken'] = $this->scrollToken;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchMediaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaList'])) {
            if (!empty($map['MediaList'])) {
                $model->mediaList = [];
                $n                = 0;
                foreach ($map['MediaList'] as $item) {
                    $model->mediaList[$n++] = null !== $item ? mediaList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScrollToken'])) {
            $model->scrollToken = $map['ScrollToken'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
