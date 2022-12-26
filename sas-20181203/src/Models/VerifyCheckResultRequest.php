<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class VerifyCheckResultRequest extends Model
{
    /**
     * @var int[]
     */
    public $checkIds;
    protected $_name = [
        'checkIds' => 'CheckIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkIds) {
            $res['CheckIds'] = $this->checkIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyCheckResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckIds'])) {
            if (!empty($map['CheckIds'])) {
                $model->checkIds = $map['CheckIds'];
            }
        }

        return $model;
    }
}
