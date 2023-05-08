<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeASMGatewayImportedServicesResponseBody\importedServices;
use AlibabaCloud\Tea\Model;

class DescribeASMGatewayImportedServicesResponseBody extends Model
{
    /**
     * @description The imported services.
     *
     * @var importedServices[]
     */
    public $importedServices;

    /**
     * @description The ID of the request.
     *
     * @example 11fd0027-c27e-41bb-a565-75583054****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'importedServices' => 'ImportedServices',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->importedServices) {
            $res['ImportedServices'] = [];
            if (null !== $this->importedServices && \is_array($this->importedServices)) {
                $n = 0;
                foreach ($this->importedServices as $item) {
                    $res['ImportedServices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeASMGatewayImportedServicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImportedServices'])) {
            if (!empty($map['ImportedServices'])) {
                $model->importedServices = [];
                $n                       = 0;
                foreach ($map['ImportedServices'] as $item) {
                    $model->importedServices[$n++] = null !== $item ? importedServices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
