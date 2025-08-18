<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListProjectsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListProjectsResponseBody\pageResult\projectList;

class pageResult extends Model
{
    /**
     * @var projectList[]
     */
    public $projectList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'projectList' => 'ProjectList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->projectList)) {
            Model::validateArray($this->projectList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectList) {
            if (\is_array($this->projectList)) {
                $res['ProjectList'] = [];
                $n1 = 0;
                foreach ($this->projectList as $item1) {
                    $res['ProjectList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ProjectList'])) {
            if (!empty($map['ProjectList'])) {
                $model->projectList = [];
                $n1 = 0;
                foreach ($map['ProjectList'] as $item1) {
                    $model->projectList[$n1] = projectList::fromMap($item1);
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
