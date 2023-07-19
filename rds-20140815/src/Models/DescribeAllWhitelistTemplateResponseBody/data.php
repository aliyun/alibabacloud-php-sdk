<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAllWhitelistTemplateResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAllWhitelistTemplateResponseBody\data\templates;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currPageNumbers;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasNext;

    /**
     * @example false
     *
     * @var bool
     */
    public $hasPrev;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxRecordsPerPage;

    /**
     * @var templates[]
     */
    public $templates;

    /**
     * @example 3
     *
     * @var int
     */
    public $totalPageNumbers;

    /**
     * @example 402
     *
     * @var int
     */
    public $totalRecords;
    protected $_name = [
        'currPageNumbers'   => 'CurrPageNumbers',
        'hasNext'           => 'HasNext',
        'hasPrev'           => 'HasPrev',
        'maxRecordsPerPage' => 'MaxRecordsPerPage',
        'templates'         => 'Templates',
        'totalPageNumbers'  => 'TotalPageNumbers',
        'totalRecords'      => 'TotalRecords',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->maxRecordsPerPage) {
            $res['MaxRecordsPerPage'] = $this->maxRecordsPerPage;
        }
        if (null !== $this->templates) {
            $res['Templates'] = [];
            if (null !== $this->templates && \is_array($this->templates)) {
                $n = 0;
                foreach ($this->templates as $item) {
                    $res['Templates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalPageNumbers) {
            $res['TotalPageNumbers'] = $this->totalPageNumbers;
        }
        if (null !== $this->totalRecords) {
            $res['TotalRecords'] = $this->totalRecords;
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
        if (isset($map['CurrPageNumbers'])) {
            $model->currPageNumbers = $map['CurrPageNumbers'];
        }
        if (isset($map['HasNext'])) {
            $model->hasNext = $map['HasNext'];
        }
        if (isset($map['HasPrev'])) {
            $model->hasPrev = $map['HasPrev'];
        }
        if (isset($map['MaxRecordsPerPage'])) {
            $model->maxRecordsPerPage = $map['MaxRecordsPerPage'];
        }
        if (isset($map['Templates'])) {
            if (!empty($map['Templates'])) {
                $model->templates = [];
                $n                = 0;
                foreach ($map['Templates'] as $item) {
                    $model->templates[$n++] = null !== $item ? templates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalPageNumbers'])) {
            $model->totalPageNumbers = $map['TotalPageNumbers'];
        }
        if (isset($map['TotalRecords'])) {
            $model->totalRecords = $map['TotalRecords'];
        }

        return $model;
    }
}
