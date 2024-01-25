<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NBF\V20211110_21312586\Models;

use AlibabaCloud\Tea\Model;

class UpdateAndReleaseApiRequest extends Model
{
    /**
     * @var string
     */
    public $updateApiCmd;
    protected $_name = [
        'updateApiCmd' => 'updateApiCmd',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateApiCmd) {
            $res['updateApiCmd'] = $this->updateApiCmd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAndReleaseApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['updateApiCmd'])) {
            $model->updateApiCmd = $map['updateApiCmd'];
        }

        return $model;
    }
}
