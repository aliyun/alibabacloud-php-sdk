<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\CheckDcdnProjectExistResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description Indicates whether the real-time log delivery project exists. Valid values:
     *
     *   **false**: The real-time log delivery project does not exist.
     *   **true**: The real-time log delivery project exists.
     *
     * @example false
     *
     * @var string
     */
    public $exist;
    protected $_name = [
        'exist' => 'Exist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exist) {
            $res['Exist'] = $this->exist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Exist'])) {
            $model->exist = $map['Exist'];
        }

        return $model;
    }
}
