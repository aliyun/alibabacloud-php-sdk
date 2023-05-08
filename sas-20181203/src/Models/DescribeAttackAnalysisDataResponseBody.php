<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeAttackAnalysisDataResponseBody extends Model
{
    /**
     * @example [{\"crack_hour\":1662480000000,\"crack_cnt\":471},{\"crack_hour\":1662483600000,\"crack_cnt\":461},{\"crack_hour\":1662487200000,\"crack_cnt\":445},{\"crack_hour\":1662490800000,\"crack_cnt\":471},{\"crack_hour\":1662494400000,\"crack_cnt\":534},{\"crack_hour\":1662498000000,\"crack_cnt\":652},{\"crack_hour\":1662501600000,\"crack_cnt\":706},{\"crack_hour\":1662505200000,\"crack_cnt\":613},{\"crack_hour\":1662508800000,\"crack_cnt\":578},{\"crack_hour\":1662512400000,\"crack_cnt\":577},{\"crack_hour\":1662516000000,\"crack_cnt\":616},{\"crack_hour\":1662519600000,\"crack_cnt\":597},{\"crack_hour\":1662523200000,\"crack_cnt\":575},{\"crack_hour\":1662526800000,\"crack_cnt\":507}]
     *
     * @var string
     */
    public $data;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 4C1AE3F3-18FA-4108-BBB9-AFA1A032756C
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1000
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'data'      => 'Data',
        'page'      => 'Page',
        'pageSize'  => 'PageSize',
        'requestId' => 'RequestId',
        'total'     => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAttackAnalysisDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
