<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Input extends Model
{
    /**
     * @var InputOSS
     */
    public $OSS;
    protected $_name = [
        'OSS' => 'OSS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->OSS) {
            $res['OSS'] = null !== $this->OSS ? $this->OSS->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Input
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OSS'])) {
            $model->OSS = InputOSS::fromMap($map['OSS']);
        }

        return $model;
    }
}
