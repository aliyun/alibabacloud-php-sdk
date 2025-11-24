<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

class GetDeploymentBySelectorRequest extends Model
{
    /**
     * @var string
     */
    public $guestCluster;

    /**
     * @var string[]
     */
    public $labelSelector;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $mark;

    /**
     * @var string
     */
    public $nameSpace;

    /**
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'guestCluster' => 'GuestCluster',
        'labelSelector' => 'LabelSelector',
        'limit' => 'Limit',
        'mark' => 'Mark',
        'nameSpace' => 'NameSpace',
        'serviceMeshId' => 'ServiceMeshId',
    ];

    public function validate()
    {
        if (\is_array($this->labelSelector)) {
            Model::validateArray($this->labelSelector);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->guestCluster) {
            $res['GuestCluster'] = $this->guestCluster;
        }

        if (null !== $this->labelSelector) {
            if (\is_array($this->labelSelector)) {
                $res['LabelSelector'] = [];
                foreach ($this->labelSelector as $key1 => $value1) {
                    $res['LabelSelector'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->mark) {
            $res['Mark'] = $this->mark;
        }

        if (null !== $this->nameSpace) {
            $res['NameSpace'] = $this->nameSpace;
        }

        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
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
        if (isset($map['GuestCluster'])) {
            $model->guestCluster = $map['GuestCluster'];
        }

        if (isset($map['LabelSelector'])) {
            if (!empty($map['LabelSelector'])) {
                $model->labelSelector = [];
                foreach ($map['LabelSelector'] as $key1 => $value1) {
                    $model->labelSelector[$key1] = $value1;
                }
            }
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['Mark'])) {
            $model->mark = $map['Mark'];
        }

        if (isset($map['NameSpace'])) {
            $model->nameSpace = $map['NameSpace'];
        }

        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
