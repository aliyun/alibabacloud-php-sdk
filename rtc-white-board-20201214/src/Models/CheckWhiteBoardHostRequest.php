<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models;

use AlibabaCloud\Tea\Model;

class CheckWhiteBoardHostRequest extends Model
{
    /**
     * @var string
     */
    public $docKey;

    /**
     * @var string
     */
    public $originHost;
    protected $_name = [
        'docKey'     => 'DocKey',
        'originHost' => 'OriginHost',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docKey) {
            $res['DocKey'] = $this->docKey;
        }
        if (null !== $this->originHost) {
            $res['OriginHost'] = $this->originHost;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckWhiteBoardHostRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocKey'])) {
            $model->docKey = $map['DocKey'];
        }
        if (isset($map['OriginHost'])) {
            $model->originHost = $map['OriginHost'];
        }

        return $model;
    }
}
