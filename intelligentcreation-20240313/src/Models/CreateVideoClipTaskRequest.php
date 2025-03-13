<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class CreateVideoClipTaskRequest extends Model
{
    /**
     * @example 1314445556
     *
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
        'description'  => 'description',
        'ossKeys'      => 'ossKeys',
        'requirement'  => 'requirement',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunMainId) {
            $res['aliyunMainId'] = $this->aliyunMainId;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->ossKeys) {
            $res['ossKeys'] = $this->ossKeys;
        }
        if (null !== $this->requirement) {
            $res['requirement'] = $this->requirement;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVideoClipTaskRequest
     */
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
                $model->ossKeys = $map['ossKeys'];
            }
        }
        if (isset($map['requirement'])) {
            $model->requirement = $map['requirement'];
        }

        return $model;
    }
}
