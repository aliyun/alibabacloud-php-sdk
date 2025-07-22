<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest\realtimeSubtitle;

use AlibabaCloud\Tea\Model;

class translation extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $translateLevel;
    protected $_name = [
        'translateLevel' => 'TranslateLevel',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->translateLevel) {
            $res['TranslateLevel'] = $this->translateLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return translation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TranslateLevel'])) {
            $model->translateLevel = $map['TranslateLevel'];
        }

        return $model;
    }
}
