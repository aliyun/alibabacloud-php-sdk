<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetOSSStatisResponseBody\ossStatisList;

class GetOSSStatisResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxStorageUtilization;

    /**
     * @var ossStatisList
     */
    public $ossStatisList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'maxStorageUtilization' => 'MaxStorageUtilization',
        'ossStatisList' => 'OssStatisList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->ossStatisList) {
            $this->ossStatisList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxStorageUtilization) {
            $res['MaxStorageUtilization'] = $this->maxStorageUtilization;
        }

        if (null !== $this->ossStatisList) {
            $res['OssStatisList'] = null !== $this->ossStatisList ? $this->ossStatisList->toArray($noStream) : $this->ossStatisList;
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
        if (isset($map['MaxStorageUtilization'])) {
            $model->maxStorageUtilization = $map['MaxStorageUtilization'];
        }

        if (isset($map['OssStatisList'])) {
            $model->ossStatisList = ossStatisList::fromMap($map['OssStatisList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
