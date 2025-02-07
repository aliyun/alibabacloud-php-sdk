<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListInstanceQuotasResponseBody\quotas;

class ListInstanceQuotasResponseBody extends Model
{
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var quotas[]
     */
    public $quotas;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'quotas'     => 'Quotas',
        'requestId'  => 'RequestId',
        'status'     => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->quotas)) {
            Model::validateArray($this->quotas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->quotas) {
            if (\is_array($this->quotas)) {
                $res['Quotas'] = [];
                $n1            = 0;
                foreach ($this->quotas as $item1) {
                    $res['Quotas'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Quotas'])) {
            if (!empty($map['Quotas'])) {
                $model->quotas = [];
                $n1            = 0;
                foreach ($map['Quotas'] as $item1) {
                    $model->quotas[$n1++] = quotas::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
