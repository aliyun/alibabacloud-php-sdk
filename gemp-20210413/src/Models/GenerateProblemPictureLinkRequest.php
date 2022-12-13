<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class GenerateProblemPictureLinkRequest extends Model
{
    /**
     * @description oss key
     *
     * @var string[]
     */
    public $keys;

    /**
     * @example 50002021
     *
     * @var string
     */
    public $problemId;
    protected $_name = [
        'keys'      => 'keys',
        'problemId' => 'problemId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keys) {
            $res['keys'] = $this->keys;
        }
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateProblemPictureLinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['keys'])) {
            if (!empty($map['keys'])) {
                $model->keys = $map['keys'];
            }
        }
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }

        return $model;
    }
}
