<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeRecoverableOtsInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class otsInstances extends Model
{
    /**
     * @description The name of the Tablestore instance that can be restored.
     *
     * @example instancename
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The names of the tables in the Tablestore instance.
     *
     * @var string[]
     */
    public $tableNames;
    protected $_name = [
        'instanceName' => 'InstanceName',
        'tableNames'   => 'TableNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->tableNames) {
            $res['TableNames'] = $this->tableNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return otsInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['TableNames'])) {
            if (!empty($map['TableNames'])) {
                $model->tableNames = $map['TableNames'];
            }
        }

        return $model;
    }
}
