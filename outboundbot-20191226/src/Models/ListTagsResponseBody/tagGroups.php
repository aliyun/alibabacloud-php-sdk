<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListTagsResponseBody;

use AlibabaCloud\Tea\Model;

class tagGroups extends Model
{
    /**
     * @example 8a4c6d3d-5ed6-44ca-b779-16c20f8862be
     *
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $tagGroup;

    /**
     * @example 38c03261-9fe8-4b9b-8c3b-983a60319012
     *
     * @var string
     */
    public $tagGroupId;

    /**
     * @example 1
     *
     * @var int
     */
    public $tagGroupIndex;
    protected $_name = [
        'scriptId'      => 'ScriptId',
        'tagGroup'      => 'TagGroup',
        'tagGroupId'    => 'TagGroupId',
        'tagGroupIndex' => 'TagGroupIndex',
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
        if (null !== $this->tagGroupId) {
            $res['TagGroupId'] = $this->tagGroupId;
        }
        if (null !== $this->tagGroupIndex) {
            $res['TagGroupIndex'] = $this->tagGroupIndex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagGroups
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
        if (isset($map['TagGroupId'])) {
            $model->tagGroupId = $map['TagGroupId'];
        }
        if (isset($map['TagGroupIndex'])) {
            $model->tagGroupIndex = $map['TagGroupIndex'];
        }

        return $model;
    }
}
