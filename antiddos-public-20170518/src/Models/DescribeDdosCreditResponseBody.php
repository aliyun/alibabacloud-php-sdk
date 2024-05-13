<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosCreditResponseBody\ddosCredit;
use AlibabaCloud\Tea\Model;

class DescribeDdosCreditResponseBody extends Model
{
    /**
     * @description The details of the security credit score of the current Alibaba Cloud account in the specified region.
     *
     * @var ddosCredit
     */
    public $ddosCredit;

    /**
     * @description The ID of the request.
     *
     * @example E1F7BD73-8E9D-58D9-8658-CFC97112C641
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'ddosCredit' => 'DdosCredit',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ddosCredit) {
            $res['DdosCredit'] = null !== $this->ddosCredit ? $this->ddosCredit->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DdosCredit'])) {
            $model->ddosCredit = ddosCredit::fromMap($map['DdosCredit']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
