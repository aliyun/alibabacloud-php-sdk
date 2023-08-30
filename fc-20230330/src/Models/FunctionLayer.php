<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class FunctionLayer extends Model
{
    /**
     * @example acs:fc:cn-beijing:186824xxxxxx:layers/fc_layer/versions/1
     *
     * @var string
     */
    public $arn;

    /**
     * @example 421
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'arn'  => 'arn',
        'size' => 'size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arn) {
            $res['arn'] = $this->arn;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FunctionLayer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arn'])) {
            $model->arn = $map['arn'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
