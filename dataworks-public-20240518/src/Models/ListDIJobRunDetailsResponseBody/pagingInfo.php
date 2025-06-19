<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobRunDetailsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobRunDetailsResponseBody\pagingInfo\jobRunInfos;

class pagingInfo extends Model
{
    /**
     * @var jobRunInfos[]
     */
    public $jobRunInfos;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'jobRunInfos' => 'JobRunInfos',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->jobRunInfos)) {
            Model::validateArray($this->jobRunInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobRunInfos) {
            if (\is_array($this->jobRunInfos)) {
                $res['JobRunInfos'] = [];
                $n1 = 0;
                foreach ($this->jobRunInfos as $item1) {
                    $res['JobRunInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['JobRunInfos'])) {
            if (!empty($map['JobRunInfos'])) {
                $model->jobRunInfos = [];
                $n1 = 0;
                foreach ($map['JobRunInfos'] as $item1) {
                    $model->jobRunInfos[$n1] = jobRunInfos::fromMap($item1);
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
