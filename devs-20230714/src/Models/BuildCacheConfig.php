<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class BuildCacheConfig extends Model
{
    /**
     * @var mixed[]
     */
    public $keyPath;

    /**
     * @var string[]
     */
    public $paths;
    protected $_name = [
        'keyPath' => 'keyPath',
        'paths' => 'paths',
    ];

    public function validate()
    {
        if (\is_array($this->keyPath)) {
            Model::validateArray($this->keyPath);
        }
        if (\is_array($this->paths)) {
            Model::validateArray($this->paths);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyPath) {
            if (\is_array($this->keyPath)) {
                $res['keyPath'] = [];
                foreach ($this->keyPath as $key1 => $value1) {
                    $res['keyPath'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->paths) {
            if (\is_array($this->paths)) {
                $res['paths'] = [];
                $n1 = 0;
                foreach ($this->paths as $item1) {
                    $res['paths'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['keyPath'])) {
            if (!empty($map['keyPath'])) {
                $model->keyPath = [];
                foreach ($map['keyPath'] as $key1 => $value1) {
                    $model->keyPath[$key1] = $value1;
                }
            }
        }

        if (isset($map['paths'])) {
            if (!empty($map['paths'])) {
                $model->paths = [];
                $n1 = 0;
                foreach ($map['paths'] as $item1) {
                    $model->paths[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
