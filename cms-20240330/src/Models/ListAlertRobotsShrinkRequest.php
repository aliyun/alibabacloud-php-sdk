<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ListAlertRobotsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $robotIdsShrink;

    /**
     * @var string
     */
    public $typesShrink;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'name' => 'name',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'robotIdsShrink' => 'robotIds',
        'typesShrink' => 'types',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->robotIdsShrink) {
            $res['robotIds'] = $this->robotIdsShrink;
        }

        if (null !== $this->typesShrink) {
            $res['types'] = $this->typesShrink;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['robotIds'])) {
            $model->robotIdsShrink = $map['robotIds'];
        }

        if (isset($map['types'])) {
            $model->typesShrink = $map['types'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
