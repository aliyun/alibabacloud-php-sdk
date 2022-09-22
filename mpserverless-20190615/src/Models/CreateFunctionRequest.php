<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class CreateFunctionRequest extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $runtime;

    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'desc'    => 'Desc',
        'memory'  => 'Memory',
        'name'    => 'Name',
        'runtime' => 'Runtime',
        'spaceId' => 'SpaceId',
        'timeout' => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->runtime) {
            $res['Runtime'] = $this->runtime;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFunctionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Runtime'])) {
            $model->runtime = $map['Runtime'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
