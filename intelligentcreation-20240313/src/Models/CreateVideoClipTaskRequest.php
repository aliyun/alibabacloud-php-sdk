<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class CreateVideoClipTaskRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunMainId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $ossKeys;

    /**
     * @var string
     */
    public $requirement;
    protected $_name = [
        'aliyunMainId' => 'aliyunMainId',
        'description' => 'description',
        'ossKeys' => 'ossKeys',
        'requirement' => 'requirement',
    ];

    public function validate()
    {
        if (\is_array($this->ossKeys)) {
            Model::validateArray($this->ossKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunMainId) {
            $res['aliyunMainId'] = $this->aliyunMainId;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->ossKeys) {
            if (\is_array($this->ossKeys)) {
                $res['ossKeys'] = [];
                $n1 = 0;
                foreach ($this->ossKeys as $item1) {
                    $res['ossKeys'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requirement) {
            $res['requirement'] = $this->requirement;
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
        if (isset($map['aliyunMainId'])) {
            $model->aliyunMainId = $map['aliyunMainId'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['ossKeys'])) {
            if (!empty($map['ossKeys'])) {
                $model->ossKeys = [];
                $n1 = 0;
                foreach ($map['ossKeys'] as $item1) {
                    $model->ossKeys[$n1++] = $item1;
                }
            }
        }

        if (isset($map['requirement'])) {
            $model->requirement = $map['requirement'];
        }

        return $model;
    }
}
