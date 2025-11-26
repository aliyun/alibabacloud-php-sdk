<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyTagGroupsResponseBody;

use AlibabaCloud\Dara\Model;

class tagGroups extends Model
{
    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $tagGroup;

    /**
     * @var string
     */
    public $tagGroupId;

    /**
     * @var int
     */
    public $tagGroupIndex;
    protected $_name = [
        'scriptId' => 'ScriptId',
        'tagGroup' => 'TagGroup',
        'tagGroupId' => 'TagGroupId',
        'tagGroupIndex' => 'TagGroupIndex',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
