<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyResourcePoolRequest\config;
use AlibabaCloud\Tea\Model;

class ModifyResourcePoolRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $active;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $yarnsiteconfig;

    /**
     * @var config[]
     */
    public $config;
    protected $_name = [
        'regionId'        => 'RegionId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'id'              => 'Id',
        'active'          => 'Active',
        'name'            => 'Name',
        'clusterId'       => 'ClusterId',
        'yarnsiteconfig'  => 'Yarnsiteconfig',
        'config'          => 'Config',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->yarnsiteconfig) {
            $res['Yarnsiteconfig'] = $this->yarnsiteconfig;
        }
        if (null !== $this->config) {
            $res['Config'] = [];
            if (null !== $this->config && \is_array($this->config)) {
                $n = 0;
                foreach ($this->config as $item) {
                    $res['Config'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyResourcePoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Yarnsiteconfig'])) {
            $model->yarnsiteconfig = $map['Yarnsiteconfig'];
        }
        if (isset($map['Config'])) {
            if (!empty($map['Config'])) {
                $model->config = [];
                $n             = 0;
                foreach ($map['Config'] as $item) {
                    $model->config[$n++] = null !== $item ? config::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
