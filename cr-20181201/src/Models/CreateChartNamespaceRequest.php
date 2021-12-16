<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class CreateChartNamespaceRequest extends Model
{
    /**
     * @var bool
     */
    public $autoCreateRepo;

    /**
     * @var string
     */
    public $defaultRepoType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $namespaceName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'autoCreateRepo'  => 'AutoCreateRepo',
        'defaultRepoType' => 'DefaultRepoType',
        'instanceId'      => 'InstanceId',
        'namespaceName'   => 'NamespaceName',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoCreateRepo) {
            $res['AutoCreateRepo'] = $this->autoCreateRepo;
        }
        if (null !== $this->defaultRepoType) {
            $res['DefaultRepoType'] = $this->defaultRepoType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateChartNamespaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoCreateRepo'])) {
            $model->autoCreateRepo = $map['AutoCreateRepo'];
        }
        if (isset($map['DefaultRepoType'])) {
            $model->defaultRepoType = $map['DefaultRepoType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
