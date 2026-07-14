<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ListNotifyPoliciesRequest extends Model
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
    public $orderBy;

    /**
     * @var string
     */
    public $orderDesc;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'maxResults' => 'maxResults',
        'name' => 'name',
        'nextToken' => 'nextToken',
        'orderBy' => 'orderBy',
        'orderDesc' => 'orderDesc',
        'workspace' => 'workspace',
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

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->orderBy) {
            $res['orderBy'] = $this->orderBy;
        }

        if (null !== $this->orderDesc) {
            $res['orderDesc'] = $this->orderDesc;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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

        if (isset($map['orderBy'])) {
            $model->orderBy = $map['orderBy'];
        }

        if (isset($map['orderDesc'])) {
            $model->orderDesc = $map['orderDesc'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
