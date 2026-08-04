<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryBindsByPkResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $bindData;

    /**
     * @var string
     */
    public $minorOuterId;

    /**
     * @var string
     */
    public $outerId;

    /**
     * @var string
     */
    public $pk;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'bindData' => 'BindData',
        'minorOuterId' => 'MinorOuterId',
        'outerId' => 'OuterId',
        'pk' => 'Pk',
        'status' => 'Status',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        if (\is_array($this->bindData)) {
            Model::validateArray($this->bindData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindData) {
            if (\is_array($this->bindData)) {
                $res['BindData'] = [];
                foreach ($this->bindData as $key1 => $value1) {
                    $res['BindData'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->minorOuterId) {
            $res['MinorOuterId'] = $this->minorOuterId;
        }

        if (null !== $this->outerId) {
            $res['OuterId'] = $this->outerId;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['BindData'])) {
            if (!empty($map['BindData'])) {
                $model->bindData = [];
                foreach ($map['BindData'] as $key1 => $value1) {
                    $model->bindData[$key1] = $value1;
                }
            }
        }

        if (isset($map['MinorOuterId'])) {
            $model->minorOuterId = $map['MinorOuterId'];
        }

        if (isset($map['OuterId'])) {
            $model->outerId = $map['OuterId'];
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
