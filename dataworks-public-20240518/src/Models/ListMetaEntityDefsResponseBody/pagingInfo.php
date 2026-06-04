<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListMetaEntityDefsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\MetaEntityDef;

class pagingInfo extends Model
{
    /**
     * @var MetaEntityDef[]
     */
    public $metaEntityDefs;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'metaEntityDefs' => 'MetaEntityDefs',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->metaEntityDefs)) {
            Model::validateArray($this->metaEntityDefs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metaEntityDefs) {
            if (\is_array($this->metaEntityDefs)) {
                $res['MetaEntityDefs'] = [];
                $n1 = 0;
                foreach ($this->metaEntityDefs as $item1) {
                    $res['MetaEntityDefs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['MetaEntityDefs'])) {
            if (!empty($map['MetaEntityDefs'])) {
                $model->metaEntityDefs = [];
                $n1 = 0;
                foreach ($map['MetaEntityDefs'] as $item1) {
                    $model->metaEntityDefs[$n1] = MetaEntityDef::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
