<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListTagsResponseBody;

use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListTagsResponseBody\tags\cover;
use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @var string
     */
    public $idStr;

    /**
     * @var cover
     */
    public $cover;

    /**
     * @var bool
     */
    public $isSubTag;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parentTag;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'idStr'     => 'IdStr',
        'cover'     => 'Cover',
        'isSubTag'  => 'IsSubTag',
        'name'      => 'Name',
        'parentTag' => 'ParentTag',
        'id'        => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->idStr) {
            $res['IdStr'] = $this->idStr;
        }
        if (null !== $this->cover) {
            $res['Cover'] = null !== $this->cover ? $this->cover->toMap() : null;
        }
        if (null !== $this->isSubTag) {
            $res['IsSubTag'] = $this->isSubTag;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentTag) {
            $res['ParentTag'] = $this->parentTag;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdStr'])) {
            $model->idStr = $map['IdStr'];
        }
        if (isset($map['Cover'])) {
            $model->cover = cover::fromMap($map['Cover']);
        }
        if (isset($map['IsSubTag'])) {
            $model->isSubTag = $map['IsSubTag'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentTag'])) {
            $model->parentTag = $map['ParentTag'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
