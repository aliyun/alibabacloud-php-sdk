<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosCreditResponseBody\ddosCredit;
use AlibabaCloud\Tea\Model;

class DescribeDdosCreditResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ddosCredit
     */
    public $ddosCredit;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId'  => 'RequestId',
        'ddosCredit' => 'DdosCredit',
        'success'    => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ddosCredit) {
            $res['DdosCredit'] = null !== $this->ddosCredit ? $this->ddosCredit->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDdosCreditResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DdosCredit'])) {
            $model->ddosCredit = ddosCredit::fromMap($map['DdosCredit']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
