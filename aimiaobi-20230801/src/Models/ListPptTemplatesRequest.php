<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class ListPptTemplatesRequest extends Model
{
    /**
     * @var int
     */
    public $careerId;

    /**
     * @var int
     */
    public $colourId;

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
    public $sceneId;

    /**
     * @var int
     */
    public $styleId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'careerId' => 'CareerId',
        'colourId' => 'ColourId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'sceneId' => 'SceneId',
        'styleId' => 'StyleId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->careerId) {
            $res['CareerId'] = $this->careerId;
        }

        if (null !== $this->colourId) {
            $res['ColourId'] = $this->colourId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        if (null !== $this->styleId) {
            $res['StyleId'] = $this->styleId;
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
        if (isset($map['CareerId'])) {
            $model->careerId = $map['CareerId'];
        }

        if (isset($map['ColourId'])) {
            $model->colourId = $map['ColourId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        if (isset($map['StyleId'])) {
            $model->styleId = $map['StyleId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
