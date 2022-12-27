<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListWorkspacesShrinkRequest extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example beb1eff55bf03a13cf321a395dxxxxxx
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $statusListShrink;

    /**
     * @var string
     */
    public $workspaceTemplateListShrink;
    protected $_name = [
        'maxResults'                  => 'maxResults',
        'nextToken'                   => 'nextToken',
        'statusListShrink'            => 'statusList',
        'workspaceTemplateListShrink' => 'workspaceTemplateList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->statusListShrink) {
            $res['statusList'] = $this->statusListShrink;
        }
        if (null !== $this->workspaceTemplateListShrink) {
            $res['workspaceTemplateList'] = $this->workspaceTemplateListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWorkspacesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['statusList'])) {
            $model->statusListShrink = $map['statusList'];
        }
        if (isset($map['workspaceTemplateList'])) {
            $model->workspaceTemplateListShrink = $map['workspaceTemplateList'];
        }

        return $model;
    }
}
