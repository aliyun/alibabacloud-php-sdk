<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAllWhitelistTemplateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAllWhitelistTemplateResponseBody\data\templates;

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
    public $maxRecordsPerPage;

    /**
     * @var templates[]
     */
    public $templates;

    /**
     * @var int
     */
    public $totalPageNumbers;

    /**
     * @var int
     */
    public $totalRecords;
    protected $_name = [
        'currPageNumbers' => 'CurrPageNumbers',
        'hasNext' => 'HasNext',
        'hasPrev' => 'HasPrev',
        'maxRecordsPerPage' => 'MaxRecordsPerPage',
        'templates' => 'Templates',
        'totalPageNumbers' => 'TotalPageNumbers',
        'totalRecords' => 'TotalRecords',
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

        if (null !== $this->maxRecordsPerPage) {
            $res['MaxRecordsPerPage'] = $this->maxRecordsPerPage;
        }

        if (null !== $this->templates) {
            if (\is_array($this->templates)) {
                $res['Templates'] = [];
                $n1 = 0;
                foreach ($this->templates as $item1) {
                    $res['Templates'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['MaxRecordsPerPage'])) {
            $model->maxRecordsPerPage = $map['MaxRecordsPerPage'];
        }

        if (isset($map['Templates'])) {
            if (!empty($map['Templates'])) {
                $model->templates = [];
                $n1 = 0;
                foreach ($map['Templates'] as $item1) {
                    $model->templates[$n1++] = templates::fromMap($item1);
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
