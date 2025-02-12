<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\PrecheckForConsolidatedBillingAccountResponseBody\reasons;

class PrecheckForConsolidatedBillingAccountResponseBody extends Model
{
    /**
     * @var reasons[]
     */
    public $reasons;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (\is_array($this->reasons)) {
            Model::validateArray($this->reasons);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reasons) {
            if (\is_array($this->reasons)) {
                $res['Reasons'] = [];
                $n1             = 0;
                foreach ($this->reasons as $item1) {
                    $res['Reasons'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Reasons'])) {
            if (!empty($map['Reasons'])) {
                $model->reasons = [];
                $n1             = 0;
                foreach ($map['Reasons'] as $item1) {
                    $model->reasons[$n1++] = reasons::fromMap($item1);
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
