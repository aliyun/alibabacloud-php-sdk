<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\ListUserFbAcIssuesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListUserFbAcIssuesResponseBody\data\issueDataList;

class data extends Model
{
    /**
     * @var issueDataList[]
     */
    public $issueDataList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'issueDataList' => 'IssueDataList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->issueDataList)) {
            Model::validateArray($this->issueDataList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->issueDataList) {
            if (\is_array($this->issueDataList)) {
                $res['IssueDataList'] = [];
                $n1 = 0;
                foreach ($this->issueDataList as $item1) {
                    $res['IssueDataList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['IssueDataList'])) {
            if (!empty($map['IssueDataList'])) {
                $model->issueDataList = [];
                $n1 = 0;
                foreach ($map['IssueDataList'] as $item1) {
                    $model->issueDataList[$n1] = issueDataList::fromMap($item1);
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
