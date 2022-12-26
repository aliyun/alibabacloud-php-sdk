<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeUniRecoverableListRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example msdb
     *
     * @var string
     */
    public $database;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 123
     *
     * @var int
     */
    public $policyId;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'database'    => 'Database',
        'pageSize'    => 'PageSize',
        'policyId'    => 'PolicyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUniRecoverableListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        return $model;
    }
}
