<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models\ViewPlugin;

use AlibabaCloud\Dara\Model;

class visitInfo extends Model
{
    /**
     * @var mixed[]
     */
    public $aftsConf;

    /**
     * @var mixed[]
     */
    public $ossConf;
    protected $_name = [
        'aftsConf' => 'aftsConf',
        'ossConf' => 'ossConf',
    ];

    public function validate()
    {
        if (\is_array($this->aftsConf)) {
            Model::validateArray($this->aftsConf);
        }
        if (\is_array($this->ossConf)) {
            Model::validateArray($this->ossConf);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aftsConf) {
            if (\is_array($this->aftsConf)) {
                $res['aftsConf'] = [];
                foreach ($this->aftsConf as $key1 => $value1) {
                    $res['aftsConf'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->ossConf) {
            if (\is_array($this->ossConf)) {
                $res['ossConf'] = [];
                foreach ($this->ossConf as $key1 => $value1) {
                    $res['ossConf'][$key1] = $value1;
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
        if (isset($map['aftsConf'])) {
            if (!empty($map['aftsConf'])) {
                $model->aftsConf = [];
                foreach ($map['aftsConf'] as $key1 => $value1) {
                    $model->aftsConf[$key1] = $value1;
                }
            }
        }

        if (isset($map['ossConf'])) {
            if (!empty($map['ossConf'])) {
                $model->ossConf = [];
                foreach ($map['ossConf'] as $key1 => $value1) {
                    $model->ossConf[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
