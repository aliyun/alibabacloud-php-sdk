<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetTotalPublicUrlResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $ringPublicUrl;

    /**
     * @var string
     */
    public $phonePublicUrl;
    protected $_name = [
        'ringPublicUrl'  => 'RingPublicUrl',
        'phonePublicUrl' => 'PhonePublicUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ringPublicUrl) {
            $res['RingPublicUrl'] = $this->ringPublicUrl;
        }
        if (null !== $this->phonePublicUrl) {
            $res['PhonePublicUrl'] = $this->phonePublicUrl;
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
        if (isset($map['RingPublicUrl'])) {
            $model->ringPublicUrl = $map['RingPublicUrl'];
        }
        if (isset($map['PhonePublicUrl'])) {
            $model->phonePublicUrl = $map['PhonePublicUrl'];
        }

        return $model;
    }
}
