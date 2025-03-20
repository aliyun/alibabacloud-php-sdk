<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetSitePauseResponseBody extends Model
{
    /**
     * @description Indicates whether ESA is paused on the website. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $paused;

    /**
     * @description The request ID.
     *
     * @example EEEBE525-F576-1196-8DAF-2D70CA3F4D2F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'paused' => 'Paused',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->paused) {
            $res['Paused'] = $this->paused;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSitePauseResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Paused'])) {
            $model->paused = $map['Paused'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
