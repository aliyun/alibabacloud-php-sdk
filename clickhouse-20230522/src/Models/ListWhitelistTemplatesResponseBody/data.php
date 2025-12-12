<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\ListWhitelistTemplatesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ListWhitelistTemplatesResponseBody\data\templates;

class data extends Model
{
    /**
     * @var int
     */
    public $currPageNumbers;

    /**
     * @var bool
     */
    public $hasNext;

    /**
     * @var bool
     */
    public $hasPrev;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var templates[]
     */
    public $templates;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $totalPageNumbers;
    protected $_name = [
        'currPageNumbers' => 'CurrPageNumbers',
        'hasNext' => 'HasNext',
        'hasPrev' => 'HasPrev',
        'pageSize' => 'PageSize',
        'templates' => 'Templates',
        'totalCount' => 'TotalCount',
        'totalPageNumbers' => 'TotalPageNumbers',
    ];

    public function validate()
    {
        if (\is_array($this->templates)) {
            Model::validateArray($this->templates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currPageNumbers) {
            $res['CurrPageNumbers'] = $this->currPageNumbers;
        }

        if (null !== $this->hasNext) {
            $res['HasNext'] = $this->hasNext;
        }

        if (null !== $this->hasPrev) {
            $res['HasPrev'] = $this->hasPrev;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->templates) {
            if (\is_array($this->templates)) {
                $res['Templates'] = [];
                $n1 = 0;
                foreach ($this->templates as $item1) {
                    $res['Templates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->totalPageNumbers) {
            $res['TotalPageNumbers'] = $this->totalPageNumbers;
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
        if (isset($map['CurrPageNumbers'])) {
            $model->currPageNumbers = $map['CurrPageNumbers'];
        }

        if (isset($map['HasNext'])) {
            $model->hasNext = $map['HasNext'];
        }

        if (isset($map['HasPrev'])) {
            $model->hasPrev = $map['HasPrev'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Templates'])) {
            if (!empty($map['Templates'])) {
                $model->templates = [];
                $n1 = 0;
                foreach ($map['Templates'] as $item1) {
                    $model->templates[$n1] = templates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['TotalPageNumbers'])) {
            $model->totalPageNumbers = $map['TotalPageNumbers'];
        }

        return $model;
    }
}
