<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListInstancesResponseBody\instances\config;

use AlibabaCloud\Dara\Model;

class dataManagements extends Model
{
    /**
     * @var string
     */
    public $componentCode;
    /**
     * @var mixed[]
     */
    public $meta;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'componentCode' => 'ComponentCode',
        'meta'          => 'Meta',
        'type'          => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->meta)) {
            Model::validateArray($this->meta);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentCode) {
            $res['ComponentCode'] = $this->componentCode;
        }

        if (null !== $this->meta) {
            if (\is_array($this->meta)) {
                $res['Meta'] = [];
                foreach ($this->meta as $key1 => $value1) {
                    $res['Meta'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ComponentCode'])) {
            $model->componentCode = $map['ComponentCode'];
        }

        if (isset($map['Meta'])) {
            if (!empty($map['Meta'])) {
                $model->meta = [];
                foreach ($map['Meta'] as $key1 => $value1) {
                    $model->meta[$key1] = $value1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
