<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Dara\Model;

class AicsOpenApiInvokeRequest extends Model
{
    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var mixed[]
     */
    public $param;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'nodeId' => 'NodeId',
        'param' => 'Param',
        'serviceId' => 'ServiceId',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->param)) {
            Model::validateArray($this->param);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->param) {
            if (\is_array($this->param)) {
                $res['Param'] = [];
                foreach ($this->param as $key1 => $value1) {
                    $res['Param'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['Param'])) {
            if (!empty($map['Param'])) {
                $model->param = [];
                foreach ($map['Param'] as $key1 => $value1) {
                    $model->param[$key1] = $value1;
                }
            }
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
