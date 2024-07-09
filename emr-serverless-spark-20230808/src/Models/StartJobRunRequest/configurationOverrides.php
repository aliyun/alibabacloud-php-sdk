<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartJobRunRequest;

use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartJobRunRequest\configurationOverrides\configurations;
use AlibabaCloud\Tea\Model;

class configurationOverrides extends Model
{
    /**
     * @description The SparkConf objects.
     *
     * @var configurations[]
     */
    public $configurations;
    protected $_name = [
        'configurations' => 'configurations',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configurations) {
            $res['configurations'] = [];
            if (null !== $this->configurations && \is_array($this->configurations)) {
                $n = 0;
                foreach ($this->configurations as $item) {
                    $res['configurations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configurationOverrides
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configurations'])) {
            if (!empty($map['configurations'])) {
                $model->configurations = [];
                $n                     = 0;
                foreach ($map['configurations'] as $item) {
                    $model->configurations[$n++] = null !== $item ? configurations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
