<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetTotalPublicUrlResponseBody;

use AlibabaCloud\Tea\Model;

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
        'ringPublicUrl'  => 'RingPublicUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
