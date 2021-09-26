<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterTemplateResponseBody\templateInfo\bootstrapActionList;

use AlibabaCloud\Tea\Model;

class bootstrapAction extends Model
{
    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $arg;
    protected $_name = [
        'path' => 'Path',
        'name' => 'Name',
        'arg'  => 'Arg',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->arg) {
            $res['Arg'] = $this->arg;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bootstrapAction
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Arg'])) {
            $model->arg = $map['Arg'];
        }

        return $model;
    }
}
