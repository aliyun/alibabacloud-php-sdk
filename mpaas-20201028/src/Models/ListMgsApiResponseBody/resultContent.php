<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMgsApiResponseBody;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMgsApiResponseBody\resultContent\value;
use AlibabaCloud\Tea\Model;

class resultContent extends Model
{
    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var value[]
     */
    public $value;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'success'      => 'Success',
        'value'        => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->value) {
            $res['Value'] = [];
            if (null !== $this->value && \is_array($this->value)) {
                $n = 0;
                foreach ($this->value as $item) {
                    $res['Value'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultContent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Value'])) {
            if (!empty($map['Value'])) {
                $model->value = [];
                $n            = 0;
                foreach ($map['Value'] as $item) {
                    $model->value[$n++] = null !== $item ? value::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
