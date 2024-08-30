<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class DeleteTrainingJobLabelsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example RootModelID
     *
     * @var string
     */
    public $keys;
    protected $_name = [
        'keys' => 'Keys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keys) {
            $res['Keys'] = $this->keys;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTrainingJobLabelsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keys'])) {
            $model->keys = $map['Keys'];
        }

        return $model;
    }
}
