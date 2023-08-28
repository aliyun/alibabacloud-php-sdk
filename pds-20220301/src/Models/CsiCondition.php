<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class CsiCondition extends Model
{
    /**
     * @var Condition
     */
    public $fileDataPunish;
    protected $_name = [
        'fileDataPunish' => 'file_data_punish',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileDataPunish) {
            $res['file_data_punish'] = null !== $this->fileDataPunish ? $this->fileDataPunish->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CsiCondition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['file_data_punish'])) {
            $model->fileDataPunish = Condition::fromMap($map['file_data_punish']);
        }

        return $model;
    }
}
