<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\AiStatisticsConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\AiStatisticsPathField;

class pathFieldConfigs extends Model
{
    /**
     * @var AiStatisticsPathField[]
     */
    public $fieldPaths;

    /**
     * @var string
     */
    public $path;
    protected $_name = [
        'fieldPaths' => 'fieldPaths',
        'path' => 'path',
    ];

    public function validate()
    {
        if (\is_array($this->fieldPaths)) {
            Model::validateArray($this->fieldPaths);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fieldPaths) {
            if (\is_array($this->fieldPaths)) {
                $res['fieldPaths'] = [];
                foreach ($this->fieldPaths as $key1 => $value1) {
                    $res['fieldPaths'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
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
        if (isset($map['fieldPaths'])) {
            if (!empty($map['fieldPaths'])) {
                $model->fieldPaths = [];
                foreach ($map['fieldPaths'] as $key1 => $value1) {
                    $model->fieldPaths[$key1] = AiStatisticsPathField::fromMap($value1);
                }
            }
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        return $model;
    }
}
