<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;

class DescribeSagCurrentDnsResponseBody extends Model
{
    /**
     * @var string
     */
    public $masterDns;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $slaveDns;
    protected $_name = [
        'masterDns' => 'MasterDns',
        'requestId' => 'RequestId',
        'slaveDns' => 'SlaveDns',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->masterDns) {
            $res['MasterDns'] = $this->masterDns;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->slaveDns) {
            $res['SlaveDns'] = $this->slaveDns;
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
        if (isset($map['MasterDns'])) {
            $model->masterDns = $map['MasterDns'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SlaveDns'])) {
            $model->slaveDns = $map['SlaveDns'];
        }

        return $model;
    }
}
