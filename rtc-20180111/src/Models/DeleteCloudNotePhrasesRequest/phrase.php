<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteCloudNotePhrasesRequest;

use AlibabaCloud\Tea\Model;

class phrase extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1qasw23ezcsrfsawq
     *
     * @var string
     */
    public $id;
    protected $_name = [
        'id' => 'Id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return phrase
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
