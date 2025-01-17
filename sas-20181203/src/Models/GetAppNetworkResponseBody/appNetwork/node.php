<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAppNetworkResponseBody\appNetwork;

use AlibabaCloud\Dara\Model;

class node extends Model
{
    /**
     * @var string[]
     */
    public $containerIds;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $namespaceId;
    /**
     * @var string
     */
    public $riskLevel;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'containerIds' => 'ContainerIds',
        'id'           => 'Id',
        'name'         => 'Name',
        'namespaceId'  => 'NamespaceId',
        'riskLevel'    => 'RiskLevel',
        'type'         => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->containerIds)) {
            Model::validateArray($this->containerIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerIds) {
            if (\is_array($this->containerIds)) {
                $res['ContainerIds'] = [];
                $n1                  = 0;
                foreach ($this->containerIds as $item1) {
                    $res['ContainerIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
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
        if (isset($map['ContainerIds'])) {
            if (!empty($map['ContainerIds'])) {
                $model->containerIds = [];
                $n1                  = 0;
                foreach ($map['ContainerIds'] as $item1) {
                    $model->containerIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
