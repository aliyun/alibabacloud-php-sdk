<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeMfaDevicesResponseBody\mfaDevices;
use AlibabaCloud\Tea\Model;

class DescribeMfaDevicesResponseBody extends Model
{
    /**
     * @description Details about the virtual MFA devices.
     *
     * @var mfaDevices[]
     */
    public $mfaDevices;

    /**
     * @description The token that determines the start point of the next query.
     *
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6na6YlN9asMM31MsMcdQNpp
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 33DBB8EC-6E68-4726-91C4-E09C59D9A7D8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mfaDevices' => 'MfaDevices',
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mfaDevices) {
            $res['MfaDevices'] = [];
            if (null !== $this->mfaDevices && \is_array($this->mfaDevices)) {
                $n = 0;
                foreach ($this->mfaDevices as $item) {
                    $res['MfaDevices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMfaDevicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MfaDevices'])) {
            if (!empty($map['MfaDevices'])) {
                $model->mfaDevices = [];
                $n                 = 0;
                foreach ($map['MfaDevices'] as $item) {
                    $model->mfaDevices[$n++] = null !== $item ? mfaDevices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
