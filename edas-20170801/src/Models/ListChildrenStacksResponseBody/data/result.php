<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListChildrenStacksResponseBody\data;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string[]
     */
    public $buildTypes;

    /**
     * @var bool
     */
    public $latest;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $preferred;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'comment'    => 'Comment',
        'buildTypes' => 'BuildTypes',
        'latest'     => 'Latest',
        'name'       => 'Name',
        'preferred'  => 'Preferred',
        'id'         => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->buildTypes) {
            $res['BuildTypes'] = $this->buildTypes;
        }
        if (null !== $this->latest) {
            $res['Latest'] = $this->latest;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->preferred) {
            $res['Preferred'] = $this->preferred;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['BuildTypes'])) {
            if (!empty($map['BuildTypes'])) {
                $model->buildTypes = $map['BuildTypes'];
            }
        }
        if (isset($map['Latest'])) {
            $model->latest = $map['Latest'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Preferred'])) {
            $model->preferred = $map['Preferred'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
