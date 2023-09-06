<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceInfoResponseBody\confInfo;
use AlibabaCloud\Tea\Model;

class QueryConferenceInfoResponseBody extends Model
{
    /**
     * @var confInfo
     */
    public $confInfo;

    /**
     * @description requestId
     *
     * @example 4248DCC9-785F-5A14-8BE0-830FD52E1261
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'confInfo'  => 'confInfo',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->confInfo) {
            $res['confInfo'] = null !== $this->confInfo ? $this->confInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryConferenceInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['confInfo'])) {
            $model->confInfo = confInfo::fromMap($map['confInfo']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
