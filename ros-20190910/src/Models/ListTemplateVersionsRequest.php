<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ListTemplateVersionsRequest extends Model
{
    /**
     * @description The maximum number of results to be returned in a single call when the NextToken parameter is used for the query.
     *
     * Default value: 50.
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The query token. Set the value to the NextToken value that is returned from the last call.
     *
     * @example caeba0bbb2be03f84eb48b699f0****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the template. This parameter applies to shared and private templates.
     *
     * @example 5ecd1e10-b0e9-4389-a565-e4c15efc****
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'templateId' => 'TemplateId',
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
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTemplateVersionsRequest
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
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
