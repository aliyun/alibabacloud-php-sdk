<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class BatchDeleteDomainItemsRequest extends Model
{
    /**
     * @var int[]
     */
    public $itemIds;

    /**
     * @var string
     */
    public $listId;

    /**
     * @var string
     */
    public $listType;
    protected $_name = [
        'itemIds' => 'ItemIds',
        'listId' => 'ListId',
        'listType' => 'ListType',
    ];

    public function validate()
    {
        if (\is_array($this->itemIds)) {
            Model::validateArray($this->itemIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemIds) {
            if (\is_array($this->itemIds)) {
                $res['ItemIds'] = [];
                $n1 = 0;
                foreach ($this->itemIds as $item1) {
                    $res['ItemIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->listId) {
            $res['ListId'] = $this->listId;
        }

        if (null !== $this->listType) {
            $res['ListType'] = $this->listType;
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
        if (isset($map['ItemIds'])) {
            if (!empty($map['ItemIds'])) {
                $model->itemIds = [];
                $n1 = 0;
                foreach ($map['ItemIds'] as $item1) {
                    $model->itemIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ListId'])) {
            $model->listId = $map['ListId'];
        }

        if (isset($map['ListType'])) {
            $model->listType = $map['ListType'];
        }

        return $model;
    }
}
