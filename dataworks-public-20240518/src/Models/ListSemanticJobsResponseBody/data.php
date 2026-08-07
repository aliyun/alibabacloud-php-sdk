<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListSemanticJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListSemanticJobsResponseBody\data\semanticJobs;

class data extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var semanticJobs[]
     */
    public $semanticJobs;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'semanticJobs' => 'SemanticJobs',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->semanticJobs)) {
            Model::validateArray($this->semanticJobs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->semanticJobs) {
            if (\is_array($this->semanticJobs)) {
                $res['SemanticJobs'] = [];
                $n1 = 0;
                foreach ($this->semanticJobs as $item1) {
                    $res['SemanticJobs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SemanticJobs'])) {
            if (!empty($map['SemanticJobs'])) {
                $model->semanticJobs = [];
                $n1 = 0;
                foreach ($map['SemanticJobs'] as $item1) {
                    $model->semanticJobs[$n1] = semanticJobs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
