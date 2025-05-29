<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribePresetsResponseBody\presets;

class DescribePresetsResponseBody extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var presets[]
     */
    public $presets;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'id' => 'Id',
        'presets' => 'Presets',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->presets)) {
            Model::validateArray($this->presets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->presets) {
            if (\is_array($this->presets)) {
                $res['Presets'] = [];
                $n1 = 0;
                foreach ($this->presets as $item1) {
                    $res['Presets'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Presets'])) {
            if (!empty($map['Presets'])) {
                $model->presets = [];
                $n1 = 0;
                foreach ($map['Presets'] as $item1) {
                    $model->presets[$n1++] = presets::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
