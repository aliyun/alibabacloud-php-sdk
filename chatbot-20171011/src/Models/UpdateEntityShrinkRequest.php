<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class UpdateEntityShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $entityId;

    /**
     * @var string
     */
    public $entityName;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $regex;

    /**
     * @var string
     */
    public $membersShrink;
    protected $_name = [
        'entityId'      => 'EntityId',
        'entityName'    => 'EntityName',
        'entityType'    => 'EntityType',
        'regex'         => 'Regex',
        'membersShrink' => 'Members',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->regex) {
            $res['Regex'] = $this->regex;
        }
        if (null !== $this->membersShrink) {
            $res['Members'] = $this->membersShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEntityShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['Regex'])) {
            $model->regex = $map['Regex'];
        }
        if (isset($map['Members'])) {
            $model->membersShrink = $map['Members'];
        }

        return $model;
    }
}
