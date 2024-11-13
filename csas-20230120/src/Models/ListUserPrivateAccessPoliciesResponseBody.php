<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserPrivateAccessPoliciesResponseBody\polices;
use AlibabaCloud\Tea\Model;

class ListUserPrivateAccessPoliciesResponseBody extends Model
{
    /**
     * @var polices[]
     */
    public $polices;

    /**
     * @description Id of the request
     *
     * @example 9D852F87-AFB5-51B8-AACD-F7D0EFB8277D
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 20
     *
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'polices'   => 'Polices',
        'requestId' => 'RequestId',
        'totalNum'  => 'TotalNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->polices) {
            $res['Polices'] = [];
            if (null !== $this->polices && \is_array($this->polices)) {
                $n = 0;
                foreach ($this->polices as $item) {
                    $res['Polices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserPrivateAccessPoliciesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Polices'])) {
            if (!empty($map['Polices'])) {
                $model->polices = [];
                $n              = 0;
                foreach ($map['Polices'] as $item) {
                    $model->polices[$n++] = null !== $item ? polices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}
