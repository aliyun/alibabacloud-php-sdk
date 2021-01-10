<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\PlayInfoResponseBody\notFoundCDNDomain;
use AlibabaCloud\SDK\Mts\V20140618\Models\PlayInfoResponseBody\playInfoList;
use AlibabaCloud\Tea\Model;

class PlayInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var notFoundCDNDomain
     */
    public $notFoundCDNDomain;

    /**
     * @var playInfoList
     */
    public $playInfoList;
    protected $_name = [
        'requestId'         => 'RequestId',
        'notFoundCDNDomain' => 'NotFoundCDNDomain',
        'playInfoList'      => 'PlayInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->notFoundCDNDomain) {
            $res['NotFoundCDNDomain'] = null !== $this->notFoundCDNDomain ? $this->notFoundCDNDomain->toMap() : null;
        }
        if (null !== $this->playInfoList) {
            $res['PlayInfoList'] = null !== $this->playInfoList ? $this->playInfoList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PlayInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NotFoundCDNDomain'])) {
            $model->notFoundCDNDomain = notFoundCDNDomain::fromMap($map['NotFoundCDNDomain']);
        }
        if (isset($map['PlayInfoList'])) {
            $model->playInfoList = playInfoList::fromMap($map['PlayInfoList']);
        }

        return $model;
    }
}
