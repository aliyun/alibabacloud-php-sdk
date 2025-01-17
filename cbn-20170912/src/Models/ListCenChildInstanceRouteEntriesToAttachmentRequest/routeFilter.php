<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenChildInstanceRouteEntriesToAttachmentRequest;

use AlibabaCloud\Dara\Model;

class routeFilter extends Model
{
    /**
     * @var string
     */
    public $key;
    /**
     * @var string[]
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (\is_array($this->value)) {
            Model::validateArray($this->value);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->value) {
            if (\is_array($this->value)) {
                $res['Value'] = [];
                $n1           = 0;
                foreach ($this->value as $item1) {
                    $res['Value'][$n1++] = $item1;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Value'])) {
            if (!empty($map['Value'])) {
                $model->value = [];
                $n1           = 0;
                foreach ($map['Value'] as $item1) {
                    $model->value[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
