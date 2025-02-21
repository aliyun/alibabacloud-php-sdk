<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ModifyAsrConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $affectedRows;
    protected $_name = [
        'affectedRows' => 'AffectedRows',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->affectedRows) {
            $res['AffectedRows'] = $this->affectedRows;
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
        if (isset($map['AffectedRows'])) {
            $model->affectedRows = $map['AffectedRows'];
        }

        return $model;
    }
}
