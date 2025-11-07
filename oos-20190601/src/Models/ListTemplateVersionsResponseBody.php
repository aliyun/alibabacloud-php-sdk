<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTemplateVersionsResponseBody\templateVersions;

class ListTemplateVersionsResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var templateVersions[]
     */
    public $templateVersions;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'templateVersions' => 'TemplateVersions',
    ];

    public function validate()
    {
        if (\is_array($this->templateVersions)) {
            Model::validateArray($this->templateVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->templateVersions)) {
                $res['TemplateVersions'] = [];
                $n1 = 0;
                foreach ($this->templateVersions as $item1) {
                    $res['TemplateVersions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['TemplateVersions'] as $item1) {
                    $model->templateVersions[$n1] = templateVersions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
