<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDnsGtmAvailableAlertGroupResponseBody extends Model
{
    /**
     * @description The returned available alert groups.
     *
     * @var string
     */
    public $availableAlertGroup;

    /**
     * @description The ID of the request.
     *
     * @example 6856BCF6-11D6-4D7E-AC53-FD579933522B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'availableAlertGroup' => 'AvailableAlertGroup',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableAlertGroup) {
            $res['AvailableAlertGroup'] = $this->availableAlertGroup;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDnsGtmAvailableAlertGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableAlertGroup'])) {
            $model->availableAlertGroup = $map['AvailableAlertGroup'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
