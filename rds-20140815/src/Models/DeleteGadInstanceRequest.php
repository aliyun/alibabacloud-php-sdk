<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DeleteGadInstanceRequest extends Model
{
    /**
     * @description The ID of the global active database cluster. You can call the [DescribeGadInstances](~~330105~~) operation to query the IDs of global active database clusters.
     *
     * @example gad-rm-bp1npi2j8********
     *
     * @var string
     */
    public $gadInstanceName;

    /**
     * @description The region ID of the central node of the global active database cluster. You can call the [DescribeGadInstances](~~330105~~) operation to query the region IDs of global active database clusters.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'gadInstanceName' => 'GadInstanceName',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gadInstanceName) {
            $res['GadInstanceName'] = $this->gadInstanceName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteGadInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GadInstanceName'])) {
            $model->gadInstanceName = $map['GadInstanceName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
