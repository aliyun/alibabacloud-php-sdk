<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeTagHitsSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class tagGroups extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $tagGroup;

    /**
     * @var int
     */
    public $tagGroupIndex;
    protected $_name = [
        'id' => 'Id',
        'scriptId' => 'ScriptId',
        'tagGroup' => 'TagGroup',
        'tagGroupIndex' => 'TagGroupIndex',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
