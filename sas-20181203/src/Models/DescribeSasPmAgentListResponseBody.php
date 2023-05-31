<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSasPmAgentListResponseBody\sasPmAgentList;
use AlibabaCloud\Tea\Model;

class DescribeSasPmAgentListResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 8EF3ACC2-9400-5B64-B72D-4A1D35113750
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array that consists of the information about servers.
     *
     * @var sasPmAgentList[]
     */
    public $sasPmAgentList;
    protected $_name = [
        'requestId'      => 'RequestId',
        'sasPmAgentList' => 'SasPmAgentList',
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
        if (null !== $this->sasPmAgentList) {
            $res['SasPmAgentList'] = [];
            if (null !== $this->sasPmAgentList && \is_array($this->sasPmAgentList)) {
                $n = 0;
                foreach ($this->sasPmAgentList as $item) {
                    $res['SasPmAgentList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSasPmAgentListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SasPmAgentList'])) {
            if (!empty($map['SasPmAgentList'])) {
                $model->sasPmAgentList = [];
                $n                     = 0;
                foreach ($map['SasPmAgentList'] as $item) {
                    $model->sasPmAgentList[$n++] = null !== $item ? sasPmAgentList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
