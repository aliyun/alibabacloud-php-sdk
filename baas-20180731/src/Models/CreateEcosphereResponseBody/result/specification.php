<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\CreateEcosphereResponseBody\result;

use AlibabaCloud\Tea\Model;

class specification extends Model
{
    /**
     * @example basic
     *
     * @var string
     */
    public $name;

    /**
     * @example 2
     *
     * @var int
     */
    public $numOfNodes;

    /**
     * @example basic
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'name'       => 'Name',
        'numOfNodes' => 'NumOfNodes',
        'title'      => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->numOfNodes) {
            $res['NumOfNodes'] = $this->numOfNodes;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return specification
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NumOfNodes'])) {
            $model->numOfNodes = $map['NumOfNodes'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
