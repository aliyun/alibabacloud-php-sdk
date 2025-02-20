<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateRepositoryMemberRequest;

use AlibabaCloud\Dara\Model;

class relatedInfos extends Model
{
    /**
     * @var string
     */
    public $relatedId;
    /**
     * @var int
     */
    public $sourceId;
    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'relatedId'  => 'relatedId',
        'sourceId'   => 'sourceId',
        'sourceType' => 'sourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->relatedId) {
            $res['relatedId'] = $this->relatedId;
        }

        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
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
        if (isset($map['relatedId'])) {
            $model->relatedId = $map['relatedId'];
        }

        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        return $model;
    }
}
