<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ConfigurationOverrides\configurations;

class ConfigurationOverrides extends Model
{
    /**
     * @var configurations[]
     */
    public $configurations;
    protected $_name = [
        'configurations' => 'configurations',
    ];

    public function validate()
    {
        if (\is_array($this->configurations)) {
            Model::validateArray($this->configurations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configurations) {
            if (\is_array($this->configurations)) {
                $res['configurations'] = [];
                $n1 = 0;
                foreach ($this->configurations as $item1) {
                    $res['configurations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['configurations'])) {
            if (!empty($map['configurations'])) {
                $model->configurations = [];
                $n1 = 0;
                foreach ($map['configurations'] as $item1) {
                    $model->configurations[$n1++] = configurations::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
