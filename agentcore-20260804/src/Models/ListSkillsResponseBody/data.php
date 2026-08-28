<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListSkillsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListSkillsResponseBody\data\pageItems;

class data extends Model
{
    /**
     * @var pageItems[]
     */
    public $pageItems;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pagesAvailable;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageItems' => 'pageItems',
        'pageNumber' => 'pageNumber',
        'pagesAvailable' => 'pagesAvailable',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->pageItems)) {
            Model::validateArray($this->pageItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageItems) {
            if (\is_array($this->pageItems)) {
                $res['pageItems'] = [];
                $n1 = 0;
                foreach ($this->pageItems as $item1) {
                    $res['pageItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pagesAvailable) {
            $res['pagesAvailable'] = $this->pagesAvailable;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['pageItems'])) {
            if (!empty($map['pageItems'])) {
                $model->pageItems = [];
                $n1 = 0;
                foreach ($map['pageItems'] as $item1) {
                    $model->pageItems[$n1] = pageItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pagesAvailable'])) {
            $model->pagesAvailable = $map['pagesAvailable'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
