<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models;

use AlibabaCloud\Tea\Model;

class QueryBenefitGrantResultRequest extends Model
{
    /**
     * @example 12345
     *
     * @var string
     */
    public $cloducodeFlowNo;

    /**
     * @var string
     */
    public $outerCustomerId;
    protected $_name = [
        'cloducodeFlowNo' => 'CloducodeFlowNo',
        'outerCustomerId' => 'OuterCustomerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloducodeFlowNo) {
            $res['CloducodeFlowNo'] = $this->cloducodeFlowNo;
        }
        if (null !== $this->outerCustomerId) {
            $res['OuterCustomerId'] = $this->outerCustomerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryBenefitGrantResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloducodeFlowNo'])) {
            $model->cloducodeFlowNo = $map['CloducodeFlowNo'];
        }
        if (isset($map['OuterCustomerId'])) {
            $model->outerCustomerId = $map['OuterCustomerId'];
        }

        return $model;
    }
}
