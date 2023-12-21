<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models;

use AlibabaCloud\Tea\Model;

class UpdatePipelineRequest extends Model
{
    /**
     * @example apiVersion: "core/v1"*********
     *
     * @var string
     */
    public $manifest;
    protected $_name = [
        'manifest' => 'Manifest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->manifest) {
            $res['Manifest'] = $this->manifest;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePipelineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Manifest'])) {
            $model->manifest = $map['Manifest'];
        }

        return $model;
    }
}
