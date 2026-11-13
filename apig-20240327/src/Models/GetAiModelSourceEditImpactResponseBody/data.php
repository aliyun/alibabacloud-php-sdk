<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetAiModelSourceEditImpactResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetAiModelSourceEditImpactResponseBody\data\references;

class data extends Model
{
    /**
     * @var string[]
     */
    public $cleanup;

    /**
     * @var references[]
     */
    public $references;

    /**
     * @var int
     */
    public $sourceVersion;
    protected $_name = [
        'cleanup' => 'cleanup',
        'references' => 'references',
        'sourceVersion' => 'sourceVersion',
    ];

    public function validate()
    {
        if (\is_array($this->cleanup)) {
            Model::validateArray($this->cleanup);
        }
        if (\is_array($this->references)) {
            Model::validateArray($this->references);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cleanup) {
            if (\is_array($this->cleanup)) {
                $res['cleanup'] = [];
                $n1 = 0;
                foreach ($this->cleanup as $item1) {
                    $res['cleanup'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->references) {
            if (\is_array($this->references)) {
                $res['references'] = [];
                $n1 = 0;
                foreach ($this->references as $item1) {
                    $res['references'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceVersion) {
            $res['sourceVersion'] = $this->sourceVersion;
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
        if (isset($map['cleanup'])) {
            if (!empty($map['cleanup'])) {
                $model->cleanup = [];
                $n1 = 0;
                foreach ($map['cleanup'] as $item1) {
                    $model->cleanup[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['references'])) {
            if (!empty($map['references'])) {
                $model->references = [];
                $n1 = 0;
                foreach ($map['references'] as $item1) {
                    $model->references[$n1] = references::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['sourceVersion'])) {
            $model->sourceVersion = $map['sourceVersion'];
        }

        return $model;
    }
}
