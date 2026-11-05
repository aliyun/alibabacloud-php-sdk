<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryNodeReportDataResponseBody;

use AlibabaCloud\Dara\Model;

class reportDataModel extends Model
{
    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var int
     */
    public $postpaidNodeCount;

    /**
     * @var int
     */
    public $prepaidNodeCount;

    /**
     * @var string
     */
    public $statDate;
    protected $_name = [
        'nodeCount' => 'NodeCount',
        'postpaidNodeCount' => 'PostpaidNodeCount',
        'prepaidNodeCount' => 'PrepaidNodeCount',
        'statDate' => 'StatDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }

        if (null !== $this->postpaidNodeCount) {
            $res['PostpaidNodeCount'] = $this->postpaidNodeCount;
        }

        if (null !== $this->prepaidNodeCount) {
            $res['PrepaidNodeCount'] = $this->prepaidNodeCount;
        }

        if (null !== $this->statDate) {
            $res['StatDate'] = $this->statDate;
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
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }

        if (isset($map['PostpaidNodeCount'])) {
            $model->postpaidNodeCount = $map['PostpaidNodeCount'];
        }

        if (isset($map['PrepaidNodeCount'])) {
            $model->prepaidNodeCount = $map['PrepaidNodeCount'];
        }

        if (isset($map['StatDate'])) {
            $model->statDate = $map['StatDate'];
        }

        return $model;
    }
}
