<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\ListUserFbAcIssuesResponseBody;

use AlibabaCloud\SDK\Wyota\V20210420\Models\ListUserFbAcIssuesResponseBody\data\issueDataList;
use AlibabaCloud\Tea\Model;

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
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->issueDataList) {
            $res['IssueDataList'] = [];
            if (null !== $this->issueDataList && \is_array($this->issueDataList)) {
                $n = 0;
                foreach ($this->issueDataList as $item) {
                    $res['IssueDataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['IssueDataList'])) {
            if (!empty($map['IssueDataList'])) {
                $model->issueDataList = [];
                $n                    = 0;
                foreach ($map['IssueDataList'] as $item) {
                    $model->issueDataList[$n++] = null !== $item ? issueDataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
