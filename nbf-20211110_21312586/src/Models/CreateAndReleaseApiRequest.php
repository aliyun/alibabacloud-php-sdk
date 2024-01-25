<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NBF\V20211110_21312586\Models;

use AlibabaCloud\Tea\Model;

class CreateAndReleaseApiRequest extends Model
{
    /**
     * @var string
     */
    public $creatApiCmd;
    protected $_name = [
        'creatApiCmd' => 'creatApiCmd',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatApiCmd) {
            $res['creatApiCmd'] = $this->creatApiCmd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAndReleaseApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['creatApiCmd'])) {
            $model->creatApiCmd = $map['creatApiCmd'];
        }

        return $model;
    }
}
