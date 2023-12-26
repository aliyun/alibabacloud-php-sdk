<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeProtocolMountTargetRequest;

use AlibabaCloud\Tea\Model;

class filters extends Model
{
    /**
     * @description The filter name.
     *
     *   ProtocolServiceIds: filters export directories by protocol service ID.
     *   ExportIds: filters export directories by export directory ID.
     *   VpcIds: filters export directories by virtual private cloud (VPC) ID.
     *   VSwitchIds: filters export directories by vSwitch ID.
     *   FsetIds: filters export directories by fileset ID.
     *   Paths: filters export directories based on the path of the file system corresponding to the mount target.
     *   AccessGroupNames: filters export directories by permission group name.
     *
     * @example ExportIds
     *
     * @var string
     */
    public $key;

    /**
     * @description The filter value. This parameter does not support wildcards.
     *
     *   If Key is set to ProtocolServiceIds, set Value to a protocol service ID. You can specify a maximum of 10 protocol service IDs. Example: `ptc-12345678` or `ptc-12345678,ptc-12345679`.
     *   If Key is set to ExportIds, set Value to an export directory ID. You can specify a maximum of 10 export directory IDs. For example, `exp-12345678` or `exp-12345678,exp-12345679`.
     *   If Key is set to VpcIds, set Value to a VPC ID of the protocol service. You can specify a maximum of 10 VPC IDs. Example: `vpc-12345678` or `vpc-12345678,vpc-12345679`.
     *   If Key is set to FsetIds, set Value to a fileset ID. You can specify a maximum of 10 fileset IDs. Example, `fset-12345678` or `fset-12345678,fset-12345679`.
     *   If Key is set to Paths, set Value to a path of the file system corresponding to the mount target. You can specify a maximum of 10 paths. Example: `/cpfs/mnt_1/` or `/cpfs/mnt_1/,/cpfs/mnt_2/`.
     *   If Key is set to AccessGroupNames, set Value to a permission group name for the protocol service. You can specify a maximum of 10 permission group names. Example: `ag-12345678` or `ag-12345678,ag-12345679`.
     *
     * @example exp-19abf5beab8d****, exp-19acf6beaf7d****
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
