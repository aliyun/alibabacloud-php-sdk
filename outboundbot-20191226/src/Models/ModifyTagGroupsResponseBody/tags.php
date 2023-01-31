<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyTagGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @example 365b955d-6f4d-4ab5-a6e1-9a301307f4b1
     *
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $tagGroup;

    /**
     * @example 19b23e92-4ee3-4129-8c2e-e1968670d887
     *
     * @var string
     */
    public $tagId;

    /**
     * @example 1
     *
     * @var int
     */
    public $tagIndex;

    /**
     * @var string
     */
    public $tagName;
    protected $_name = [
        'scriptId' => 'ScriptId',
        'tagGroup' => 'TagGroup',
        'tagId'    => 'TagId',
        'tagIndex' => 'TagIndex',
        'tagName'  => 'TagName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->tagGroup) {
            $res['TagGroup'] = $this->tagGroup;
        }
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }
        if (null !== $this->tagIndex) {
            $res['TagIndex'] = $this->tagIndex;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
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
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['TagGroup'])) {
            $model->tagGroup = $map['TagGroup'];
        }
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }
        if (isset($map['TagIndex'])) {
            $model->tagIndex = $map['TagIndex'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }

        return $model;
    }
}
