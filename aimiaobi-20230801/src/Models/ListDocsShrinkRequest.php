<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class ListDocsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $categoryId;

    /**
     * @var string
     */
    public $docName;

    /**
     * @var string
     */
    public $docType;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $skip;

    /**
     * @var string
     */
    public $statusesShrink;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'docName' => 'DocName',
        'docType' => 'DocType',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'skip' => 'Skip',
        'statusesShrink' => 'Statuses',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->docName) {
            $res['DocName'] = $this->docName;
        }

        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
        }

        if (null !== $this->statusesShrink) {
            $res['Statuses'] = $this->statusesShrink;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['DocName'])) {
            $model->docName = $map['DocName'];
        }

        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
        }

        if (isset($map['Statuses'])) {
            $model->statusesShrink = $map['Statuses'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
