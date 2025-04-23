<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeMfaDevicesResponseBody\mfaDevices;

class DescribeMfaDevicesResponseBody extends Model
{
    /**
     * @var mfaDevices[]
     */
    public $mfaDevices;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mfaDevices' => 'MfaDevices',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->mfaDevices)) {
            Model::validateArray($this->mfaDevices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mfaDevices) {
            if (\is_array($this->mfaDevices)) {
                $res['MfaDevices'] = [];
                $n1 = 0;
                foreach ($this->mfaDevices as $item1) {
                    $res['MfaDevices'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MfaDevices'])) {
            if (!empty($map['MfaDevices'])) {
                $model->mfaDevices = [];
                $n1 = 0;
                foreach ($map['MfaDevices'] as $item1) {
                    $model->mfaDevices[$n1++] = mfaDevices::fromMap($item1);
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
