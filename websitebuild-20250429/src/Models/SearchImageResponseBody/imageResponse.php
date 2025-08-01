<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SearchImageResponseBody;

use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SearchImageResponseBody\imageResponse\imageList;
use AlibabaCloud\Tea\Model;

class imageResponse extends Model
{
    /**
     * @var imageList[]
     */
    public $imageList;

    /**
     * @example 3
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 2c6b65b6f9d625d4e2514a628bde8eb2e0b5e8707e68181f
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'imageList' => 'ImageList',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageList) {
            $res['ImageList'] = [];
            if (null !== $this->imageList && \is_array($this->imageList)) {
                $n = 0;
                foreach ($this->imageList as $item) {
                    $res['ImageList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageList'])) {
            if (!empty($map['ImageList'])) {
                $model->imageList = [];
                $n = 0;
                foreach ($map['ImageList'] as $item) {
                    $model->imageList[$n++] = null !== $item ? imageList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
