<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\PrecheckForConsolidatedBillingAccountResponseBody\reasons;
use AlibabaCloud\Tea\Model;

class PrecheckForConsolidatedBillingAccountResponseBody extends Model
{
    /**
     * @description The cause of the check failure.
     *
     * @var reasons[]
     */
    public $reasons;

    /**
     * @description The request ID.
     *
     * @example 9E6B6CA8-9E7A-521F-A743-AA582714727E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the check was successful. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $result;
    protected $_name = [
        'reasons'   => 'Reasons',
        'requestId' => 'RequestId',
        'result'    => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reasons) {
            $res['Reasons'] = [];
            if (null !== $this->reasons && \is_array($this->reasons)) {
                $n = 0;
                foreach ($this->reasons as $item) {
                    $res['Reasons'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PrecheckForConsolidatedBillingAccountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Reasons'])) {
            if (!empty($map['Reasons'])) {
                $model->reasons = [];
                $n              = 0;
                foreach ($map['Reasons'] as $item) {
                    $model->reasons[$n++] = null !== $item ? reasons::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
