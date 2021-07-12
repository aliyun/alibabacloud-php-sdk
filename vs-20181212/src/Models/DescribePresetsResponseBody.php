<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribePresetsResponseBody\presets;
use AlibabaCloud\Tea\Model;

class DescribePresetsResponseBody extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var presets[]
     */
    public $presets;
    protected $_name = [
        'id'        => 'Id',
        'requestId' => 'RequestId',
        'presets'   => 'Presets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->presets) {
            $res['Presets'] = [];
            if (null !== $this->presets && \is_array($this->presets)) {
                $n = 0;
                foreach ($this->presets as $item) {
                    $res['Presets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePresetsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Presets'])) {
            if (!empty($map['Presets'])) {
                $model->presets = [];
                $n              = 0;
                foreach ($map['Presets'] as $item) {
                    $model->presets[$n++] = null !== $item ? presets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
