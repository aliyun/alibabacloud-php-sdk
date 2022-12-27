<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateRepositoryMemberRequest;

use AlibabaCloud\Tea\Model;

class relatedInfos extends Model
{
    /**
     * @example 10011
     *
     * @var string
     */
    public $relatedId;

    /**
     * @example 24790
     *
     * @var int
     */
    public $sourceId;

    /**
     * @example Project
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return relatedInfos
     */
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
