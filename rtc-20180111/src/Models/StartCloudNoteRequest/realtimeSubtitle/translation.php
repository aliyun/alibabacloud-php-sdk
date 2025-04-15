<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest\realtimeSubtitle;

use AlibabaCloud\Dara\Model;

class translation extends Model
{
    /**
     * @var int
     */
    public $translateLevel;
    protected $_name = [
        'translateLevel' => 'TranslateLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->translateLevel) {
            $res['TranslateLevel'] = $this->translateLevel;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TranslateLevel'])) {
            $model->translateLevel = $map['TranslateLevel'];
        }

        return $model;
    }
}
