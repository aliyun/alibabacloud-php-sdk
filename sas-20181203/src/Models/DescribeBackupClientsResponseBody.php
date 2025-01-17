<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupClientsResponseBody\clients;

class DescribeBackupClientsResponseBody extends Model
{
    /**
     * @var clients[]
     */
    public $clients;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clients'   => 'Clients',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->clients)) {
            Model::validateArray($this->clients);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clients) {
            if (\is_array($this->clients)) {
                $res['Clients'] = [];
                $n1             = 0;
                foreach ($this->clients as $item1) {
                    $res['Clients'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Clients'])) {
            if (!empty($map['Clients'])) {
                $model->clients = [];
                $n1             = 0;
                foreach ($map['Clients'] as $item1) {
                    $model->clients[$n1++] = clients::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
