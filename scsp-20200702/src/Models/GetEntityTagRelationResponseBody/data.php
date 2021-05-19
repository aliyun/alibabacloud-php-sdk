<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models\GetEntityTagRelationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $tagName;

    /**
     * @var string
     */
    public $tagGroupCode;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $tagCode;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $tagGroupName;
    protected $_name = [
        'tagName'      => 'TagName',
        'tagGroupCode' => 'TagGroupCode',
        'entityId'     => 'EntityId',
        'tagCode'      => 'TagCode',
        'entityType'   => 'EntityType',
        'tagGroupName' => 'TagGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }
        if (null !== $this->tagGroupCode) {
            $res['TagGroupCode'] = $this->tagGroupCode;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->tagCode) {
            $res['TagCode'] = $this->tagCode;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->tagGroupName) {
            $res['TagGroupName'] = $this->tagGroupName;
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
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['TagGroupCode'])) {
            $model->tagGroupCode = $map['TagGroupCode'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['TagCode'])) {
            $model->tagCode = $map['TagCode'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['TagGroupName'])) {
            $model->tagGroupName = $map['TagGroupName'];
        }

        return $model;
    }
}
