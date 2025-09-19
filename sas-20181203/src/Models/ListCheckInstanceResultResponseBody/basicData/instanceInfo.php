<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckInstanceResultResponseBody\basicData;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckInstanceResultResponseBody\basicData\instanceInfo\config;

class instanceInfo extends Model
{
    /**
     * @var config[]
     */
    public $config;

    /**
     * @var int
     */
    public $firstUpdateTime;

    /**
     * @var int
     */
    public $lastUpdateTime;
    protected $_name = [
        'config' => 'Config',
        'firstUpdateTime' => 'FirstUpdateTime',
        'lastUpdateTime' => 'LastUpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->config)) {
            Model::validateArray($this->config);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            if (\is_array($this->config)) {
                $res['Config'] = [];
                $n1 = 0;
                foreach ($this->config as $item1) {
                    $res['Config'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->firstUpdateTime) {
            $res['FirstUpdateTime'] = $this->firstUpdateTime;
        }

        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
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
        if (isset($map['Config'])) {
            if (!empty($map['Config'])) {
                $model->config = [];
                $n1 = 0;
                foreach ($map['Config'] as $item1) {
                    $model->config[$n1] = config::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FirstUpdateTime'])) {
            $model->firstUpdateTime = $map['FirstUpdateTime'];
        }

        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }

        return $model;
    }
}
