<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkitemTimeTypeListResponseBody;

use AlibabaCloud\Tea\Model;

class timeType extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example deploy
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 67fb001005aac8d3d2a3372416
     *
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $position;
    protected $_name = [
        'description' => 'description',
        'displayName' => 'displayName',
        'identifier'  => 'identifier',
        'name'        => 'name',
        'position'    => 'position',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->position) {
            $res['position'] = $this->position;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['position'])) {
            $model->position = $map['position'];
        }

        return $model;
    }
}
