<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListKgRelationRequest;

use AlibabaCloud\Dara\Model;

class listQuery extends Model
{
    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $sourceEntityId;

    /**
     * @var string
     */
    public $targetEntityId;
    protected $_name = [
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'sourceEntityId' => 'SourceEntityId',
        'targetEntityId' => 'TargetEntityId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->sourceEntityId) {
            $res['SourceEntityId'] = $this->sourceEntityId;
        }

        if (null !== $this->targetEntityId) {
            $res['TargetEntityId'] = $this->targetEntityId;
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
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SourceEntityId'])) {
            $model->sourceEntityId = $map['SourceEntityId'];
        }

        if (isset($map['TargetEntityId'])) {
            $model->targetEntityId = $map['TargetEntityId'];
        }

        return $model;
    }
}
