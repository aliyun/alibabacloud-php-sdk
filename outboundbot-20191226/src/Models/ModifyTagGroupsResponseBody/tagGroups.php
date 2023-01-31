<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyTagGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class tagGroups extends Model
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
     * @example 54629be9-0746-464a-ab59-4830242cf644
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
