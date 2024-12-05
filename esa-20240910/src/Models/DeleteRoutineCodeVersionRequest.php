<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class DeleteRoutineCodeVersionRequest extends Model
{
    /**
     * @description The code version.
     *
     * This parameter is required.
     * @example 1710120201067203242
     *
     * @var string
     */
    public $codeVersion;

    /**
     * @description The routine name.
     *
     * This parameter is required.
     * @example test-routine1
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'codeVersion' => 'CodeVersion',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeVersion) {
            $res['CodeVersion'] = $this->codeVersion;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteRoutineCodeVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CodeVersion'])) {
            $model->codeVersion = $map['CodeVersion'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
