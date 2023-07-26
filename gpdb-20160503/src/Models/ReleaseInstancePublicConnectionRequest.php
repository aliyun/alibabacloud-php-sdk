<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ReleaseInstancePublicConnectionRequest extends Model
{
    /**
     * @description The type of the endpoint. Default value: primary. Valid values:
     *
     *   **primary**: primary endpoint.
     *   **cluster**: cluster endpoint. This type of endpoints can be created only for instances that have multiple coordinator nodes.
     *
     * @example Intranet
     *
     * @var string
     */
    public $addressType;

    /**
     * @description The public endpoint of the instance.
     *
     * You can log on to the AnalyticDB for PostgreSQL console and go to the **Basic Information** page of the instance to view the **public endpoint** in the **Database Connection** section.
     * @example gp-bp12ga6v69h86****.gpdb.rds.aliyuncs.com
     *
     * @var string
     */
    public $currentConnectionString;

    /**
     * @description The ID of the instance.
     *
     * >  You can call the [DescribeDBInstances](~~86911~~) operation to query the details of all AnalyticDB for PostgreSQL instances in a specific region, including instance IDs.
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceId;
    protected $_name = [
        'addressType'             => 'AddressType',
        'currentConnectionString' => 'CurrentConnectionString',
        'DBInstanceId'            => 'DBInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->currentConnectionString) {
            $res['CurrentConnectionString'] = $this->currentConnectionString;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReleaseInstancePublicConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['CurrentConnectionString'])) {
            $model->currentConnectionString = $map['CurrentConnectionString'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        return $model;
    }
}
