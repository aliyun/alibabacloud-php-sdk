<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetTotalPublicUrlResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $phonePublicUrl;

    /**
     * @var string
     */
    public $ringPublicUrl;
    protected $_name = [
        'phonePublicUrl' => 'PhonePublicUrl',
        'ringPublicUrl' => 'RingPublicUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->phonePublicUrl) {
            $res['PhonePublicUrl'] = $this->phonePublicUrl;
        }

        if (null !== $this->ringPublicUrl) {
            $res['RingPublicUrl'] = $this->ringPublicUrl;
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
        if (isset($map['PhonePublicUrl'])) {
            $model->phonePublicUrl = $map['PhonePublicUrl'];
        }

        if (isset($map['RingPublicUrl'])) {
            $model->ringPublicUrl = $map['RingPublicUrl'];
        }

        return $model;
    }
}
