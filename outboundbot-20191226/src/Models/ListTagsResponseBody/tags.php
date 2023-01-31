<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListTagsResponseBody;

use AlibabaCloud\Tea\Model;

class tags extends Model
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
     * @example d62be647-6202-4b1f-9708-0baeec552635
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
