<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class ListEntitiesByTagsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $entityType;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'entityType' => 'EntityType',
        'nextToken'  => 'NextToken',
        'pageSize'   => 'PageSize',
        'tagsShrink' => 'Tags',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
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
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}
