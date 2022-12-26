<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListCheckStandardRequest extends Model
{
    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string[]
     */
    public $instanceSubTypes;

    /**
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @var string[]
     */
    public $vendors;
    protected $_name = [
        'instanceIds'      => 'InstanceIds',
        'instanceSubTypes' => 'InstanceSubTypes',
        'instanceTypes'    => 'InstanceTypes',
        'lang'             => 'Lang',
        'vendors'          => 'Vendors',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->instanceSubTypes) {
            $res['InstanceSubTypes'] = $this->instanceSubTypes;
        }
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = $this->instanceTypes;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->vendors) {
            $res['Vendors'] = $this->vendors;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCheckStandardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['InstanceSubTypes'])) {
            if (!empty($map['InstanceSubTypes'])) {
                $model->instanceSubTypes = $map['InstanceSubTypes'];
            }
        }
        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = $map['InstanceTypes'];
            }
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Vendors'])) {
            if (!empty($map['Vendors'])) {
                $model->vendors = $map['Vendors'];
            }
        }

        return $model;
    }
}
