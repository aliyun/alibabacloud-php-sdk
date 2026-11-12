<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;

class ListTemplatesShrinkRequest extends Model
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
    public $resourceTagsShrink;

    /**
     * @var string
     */
    public $teamID;
    protected $_name = [
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'resourceTagsShrink' => 'resourceTags',
        'teamID' => 'teamID',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->resourceTagsShrink) {
            $res['resourceTags'] = $this->resourceTagsShrink;
        }

        if (null !== $this->teamID) {
            $res['teamID'] = $this->teamID;
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
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['resourceTags'])) {
            $model->resourceTagsShrink = $map['resourceTags'];
        }

        if (isset($map['teamID'])) {
            $model->teamID = $map['teamID'];
        }

        return $model;
    }
}
