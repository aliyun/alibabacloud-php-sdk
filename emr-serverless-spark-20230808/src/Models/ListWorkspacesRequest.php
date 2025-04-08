<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspacesRequest\tag;

class ListWorkspacesRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'maxResults' => 'maxResults',
        'name' => 'name',
        'nextToken' => 'nextToken',
        'regionId' => 'regionId',
        'state' => 'state',
        'tag' => 'tag',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['tag'])) {
            if (!empty($map['tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
