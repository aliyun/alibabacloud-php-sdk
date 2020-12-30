<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListTemplateVersionsResponseBody\templateVersions;
use AlibabaCloud\Tea\Model;

class ListTemplateVersionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var templateVersions[]
     */
    public $templateVersions;
    protected $_name = [
        'nextToken'        => 'NextToken',
        'requestId'        => 'RequestId',
        'maxResults'       => 'MaxResults',
        'templateVersions' => 'TemplateVersions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
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
