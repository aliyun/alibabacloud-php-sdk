<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeTagHitsSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class tagGroups extends Model
{
    /**
     * @description ID
     *
     * @example 8bb6f8ca-85a3-49f8-86a5-3127902a2156
     *
     * @var string
     */
    public $id;

    /**
     * @example 84fc7c41-f918-4a47-b742-a439b35a8567
     *
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $tagGroup;

    /**
     * @example 0
     *
     * @var int
     */
    public $tagGroupIndex;
    protected $_name = [
        'id'            => 'Id',
        'scriptId'      => 'ScriptId',
        'tagGroup'      => 'TagGroup',
        'tagGroupIndex' => 'TagGroupIndex',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->tagGroup) {
            $res['TagGroup'] = $this->tagGroup;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['TagGroup'])) {
            $model->tagGroup = $map['TagGroup'];
        }
        if (isset($map['TagGroupIndex'])) {
            $model->tagGroupIndex = $map['TagGroupIndex'];
        }

        return $model;
    }
}
