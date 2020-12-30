<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class DescribeSagCurrentDnsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $slaveDns;

    /**
     * @var string
     */
    public $masterDns;
    protected $_name = [
        'requestId' => 'RequestId',
        'slaveDns'  => 'SlaveDns',
        'masterDns' => 'MasterDns',
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
        if (null !== $this->slaveDns) {
            $res['SlaveDns'] = $this->slaveDns;
        }
        if (null !== $this->masterDns) {
            $res['MasterDns'] = $this->masterDns;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSagCurrentDnsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlaveDns'])) {
            $model->slaveDns = $map['SlaveDns'];
        }
        if (isset($map['MasterDns'])) {
            $model->masterDns = $map['MasterDns'];
        }

        return $model;
    }
}
