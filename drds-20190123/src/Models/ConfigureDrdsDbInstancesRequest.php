<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\ConfigureDrdsDbInstancesRequest\dbInstance;
use AlibabaCloud\Tea\Model;

class ConfigureDrdsDbInstancesRequest extends Model
{
    /**
     * @var dbInstance[]
     */
    public $dbInstance;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $drdsInstanceId;
    protected $_name = [
        'dbInstance'     => 'DbInstance',
        'dbName'         => 'DbName',
        'drdsInstanceId' => 'DrdsInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbInstance) {
            $res['DbInstance'] = [];
            if (null !== $this->dbInstance && \is_array($this->dbInstance)) {
                $n = 0;
                foreach ($this->dbInstance as $item) {
                    $res['DbInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigureDrdsDbInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbInstance'])) {
            if (!empty($map['DbInstance'])) {
                $model->dbInstance = [];
                $n                 = 0;
                foreach ($map['DbInstance'] as $item) {
                    $model->dbInstance[$n++] = null !== $item ? dbInstance::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }

        return $model;
    }
}
