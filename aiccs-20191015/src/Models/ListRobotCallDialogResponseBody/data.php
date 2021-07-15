<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ListRobotCallDialogResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'role'     => 'Role',
        'content'  => 'Content',
        'nodeType' => 'NodeType',
        'time'     => 'Time',
        'tag'      => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
