<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListTemplateVersionsResponseBody\templateVersions;
use AlibabaCloud\Tea\Model;

class ListTemplateVersionsResponseBody extends Model
{
    /**
     * @description The maximum number of results on each page.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used to retrieve the next page of results.
     *
     * @example NJSNDKLJS-SJKJDO090k30-JSDK232
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example E6CD612B-5889-4F1A-823F-8A4029E46
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The versions of the template.
     *
     * @var templateVersions[]
     */
    public $templateVersions;
    protected $_name = [
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
        'requestId'        => 'RequestId',
        'templateVersions' => 'TemplateVersions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->templateVersions) {
            $res['TemplateVersions'] = [];
            if (null !== $this->templateVersions && \is_array($this->templateVersions)) {
                $n = 0;
                foreach ($this->templateVersions as $item) {
                    $res['TemplateVersions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTemplateVersionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TemplateVersions'])) {
            if (!empty($map['TemplateVersions'])) {
                $model->templateVersions = [];
                $n                       = 0;
                foreach ($map['TemplateVersions'] as $item) {
                    $model->templateVersions[$n++] = null !== $item ? templateVersions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
