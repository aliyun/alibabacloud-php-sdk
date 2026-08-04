<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class QueryBindsByPkRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $pk;

    /**
     * @var mixed[]
     */
    public $tenantIds;
    protected $_name = [
        'appName' => 'AppName',
        'pk' => 'Pk',
        'tenantIds' => 'TenantIds',
    ];

    public function validate()
    {
        if (\is_array($this->tenantIds)) {
            Model::validateArray($this->tenantIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }

        if (null !== $this->tenantIds) {
            if (\is_array($this->tenantIds)) {
                $res['TenantIds'] = [];
                foreach ($this->tenantIds as $key1 => $value1) {
                    $res['TenantIds'][$key1] = $value1;
                }
            }
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        if (isset($map['TenantIds'])) {
            if (!empty($map['TenantIds'])) {
                $model->tenantIds = [];
                foreach ($map['TenantIds'] as $key1 => $value1) {
                    $model->tenantIds[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
