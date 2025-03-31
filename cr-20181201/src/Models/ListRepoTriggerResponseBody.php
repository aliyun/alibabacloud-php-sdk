<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTriggerResponseBody\triggers;

class ListRepoTriggerResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var triggers[]
     */
    public $triggers;
    protected $_name = [
        'code' => 'Code',
        'isSuccess' => 'IsSuccess',
        'requestId' => 'RequestId',
        'triggers' => 'Triggers',
    ];

    public function validate()
    {
        if (\is_array($this->triggers)) {
            Model::validateArray($this->triggers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->triggers) {
            if (\is_array($this->triggers)) {
                $res['Triggers'] = [];
                $n1 = 0;
                foreach ($this->triggers as $item1) {
                    $res['Triggers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Triggers'])) {
            if (!empty($map['Triggers'])) {
                $model->triggers = [];
                $n1 = 0;
                foreach ($map['Triggers'] as $item1) {
                    $model->triggers[$n1++] = triggers::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
