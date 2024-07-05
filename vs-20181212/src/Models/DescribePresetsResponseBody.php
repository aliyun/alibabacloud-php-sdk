<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribePresetsResponseBody\presets;
use AlibabaCloud\Tea\Model;

class DescribePresetsResponseBody extends Model
{
    /**
     * @example 348*****380-cn-qingdao
     *
     * @var string
     */
    public $id;

    /**
     * @var presets[]
     */
    public $presets;

    /**
     * @example 9FE0CA83-BFD3-4EBD-A429-FABB9B9AE772
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'id'        => 'Id',
        'presets'   => 'Presets',
        'requestId' => 'RequestId',
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
        if (null !== $this->presets) {
            $res['Presets'] = [];
            if (null !== $this->presets && \is_array($this->presets)) {
                $n = 0;
                foreach ($this->presets as $item) {
                    $res['Presets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Presets'])) {
            if (!empty($map['Presets'])) {
                $model->presets = [];
                $n              = 0;
                foreach ($map['Presets'] as $item) {
                    $model->presets[$n++] = null !== $item ? presets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
