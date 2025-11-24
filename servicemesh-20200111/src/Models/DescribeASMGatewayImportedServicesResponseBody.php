<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeASMGatewayImportedServicesResponseBody\importedServices;

class DescribeASMGatewayImportedServicesResponseBody extends Model
{
    /**
     * @var importedServices[]
     */
    public $importedServices;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'importedServices' => 'ImportedServices',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->importedServices)) {
            Model::validateArray($this->importedServices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->importedServices) {
            if (\is_array($this->importedServices)) {
                $res['ImportedServices'] = [];
                $n1 = 0;
                foreach ($this->importedServices as $item1) {
                    $res['ImportedServices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ImportedServices'])) {
            if (!empty($map['ImportedServices'])) {
                $model->importedServices = [];
                $n1 = 0;
                foreach ($map['ImportedServices'] as $item1) {
                    $model->importedServices[$n1] = importedServices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
