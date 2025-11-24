<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

class GetDeploymentBySelectorShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $guestCluster;

    /**
     * @var string
     */
    public $labelSelectorShrink;

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
        'labelSelectorShrink' => 'LabelSelector',
        'limit' => 'Limit',
        'mark' => 'Mark',
        'nameSpace' => 'NameSpace',
        'serviceMeshId' => 'ServiceMeshId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->guestCluster) {
            $res['GuestCluster'] = $this->guestCluster;
        }

        if (null !== $this->labelSelectorShrink) {
            $res['LabelSelector'] = $this->labelSelectorShrink;
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
            $model->labelSelectorShrink = $map['LabelSelector'];
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
