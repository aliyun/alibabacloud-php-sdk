<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\UpdateDataCacheRequest;

use AlibabaCloud\Dara\Model;

class dataSource extends Model
{
    /**
     * @var string[]
     */
    public $options;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'options' => 'Options',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->options)) {
            Model::validateArray($this->options);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->options) {
            if (\is_array($this->options)) {
                $res['Options'] = [];
                foreach ($this->options as $key1 => $value1) {
                    $res['Options'][$key1] = $value1;
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
        if (isset($map['Options'])) {
            if (!empty($map['Options'])) {
                $model->options = [];
                foreach ($map['Options'] as $key1 => $value1) {
                    $model->options[$key1] = $value1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
