<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListPublicMediaBasicInfosRequest extends Model
{
    /**
     * @description 标签
     *
     * @var string
     */
    public $mediaTagId;

    /**
     * @description 下一次读取的位置
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 分页大小
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 返回值中是否包含文件基础信息
     *
     * @var bool
     */
    public $includeFileBasicInfo;
    protected $_name = [
        'mediaTagId'           => 'MediaTagId',
        'nextToken'            => 'NextToken',
        'maxResults'           => 'MaxResults',
        'includeFileBasicInfo' => 'IncludeFileBasicInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaTagId) {
            $res['MediaTagId'] = $this->mediaTagId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->includeFileBasicInfo) {
            $res['IncludeFileBasicInfo'] = $this->includeFileBasicInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPublicMediaBasicInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaTagId'])) {
            $model->mediaTagId = $map['MediaTagId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['IncludeFileBasicInfo'])) {
            $model->includeFileBasicInfo = $map['IncludeFileBasicInfo'];
        }

        return $model;
    }
}
