<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models\TemplateView\fields;

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
        'aftsConf' => 'AftsConf',
        'ossConf' => 'OssConf',
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
                $res['AftsConf'] = [];
                foreach ($this->aftsConf as $key1 => $value1) {
                    $res['AftsConf'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->ossConf) {
            if (\is_array($this->ossConf)) {
                $res['OssConf'] = [];
                foreach ($this->ossConf as $key1 => $value1) {
                    $res['OssConf'][$key1] = $value1;
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
        if (isset($map['AftsConf'])) {
            if (!empty($map['AftsConf'])) {
                $model->aftsConf = [];
                foreach ($map['AftsConf'] as $key1 => $value1) {
                    $model->aftsConf[$key1] = $value1;
                }
            }
        }

        if (isset($map['OssConf'])) {
            if (!empty($map['OssConf'])) {
                $model->ossConf = [];
                foreach ($map['OssConf'] as $key1 => $value1) {
                    $model->ossConf[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
