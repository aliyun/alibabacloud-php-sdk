<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListFileProtectEventRequest extends Model
{
    /**
     * @var int[]
     */
    public $alertLevels;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example test-rule-1
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example 2
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'alertLevels' => 'AlertLevels',
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'ruleName'    => 'RuleName',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertLevels) {
            $res['AlertLevels'] = $this->alertLevels;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFileProtectEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertLevels'])) {
            if (!empty($map['AlertLevels'])) {
                $model->alertLevels = $map['AlertLevels'];
            }
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
