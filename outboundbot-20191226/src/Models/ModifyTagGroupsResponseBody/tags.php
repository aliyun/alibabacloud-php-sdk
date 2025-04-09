<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyTagGroupsResponseBody;

use AlibabaCloud\Dara\Model;

class tags extends Model
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
    public $tagId;

    /**
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
        'tagId' => 'TagId',
        'tagIndex' => 'TagIndex',
        'tagName' => 'TagName',
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
