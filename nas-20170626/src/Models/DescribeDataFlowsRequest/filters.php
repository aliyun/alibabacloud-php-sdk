<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowsRequest;

use AlibabaCloud\Tea\Model;

class filters extends Model
{
    /**
     * @description The filter name. Valid values:
     *
     *   DataFlowIds: filters dataflows by dataflow ID.
     *   FsetIds: filters dataflows by fileset ID.
     *   FileSystemPath: filters dataflows based on the path of a fileset in a CPFS file system.
     *   SourceStorage: filters dataflows based on the access path of the source storage.
     *   ThroughputList: filters dataflows based on dataflow throughput.
     *   Description: filters dataflows based on the fileset description.
     *   Status: filters dataflows based on dataflow status.
     *
     * @example FsetIds
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the filter. This parameter does not support wildcards.
     *
     *   If Key is set to DataFlowIds, set Value to a data flow ID or a part of the data flow ID. You can specify a dataflow ID or a group of dataflow IDs. You can specify a maximum of 10 dataflow IDs. Example: `dfid-12345678` or `dfid-12345678,dfid-12345679`.
     *   If Key is set to FsetIds, set Value to a fileset ID or a part of the fileset ID. You can specify a fileset ID or a group of fileset IDs. You can specify a maximum of 10 fileset IDs. Example: `fset-12345678` or `fset-12345678,fset-12345679`.
     *   If Key set to FileSystemPath, set Value to the path or a part of the path of a fileset in a CPFS file system. The value must be 2 to 1,024 characters in length. The value must be encoded in UTF-8.
     *   If Key is set to SourceStorage, set Value to the access path or a part of the access path of the source storage. The value must be 8 to 128 characters in length. The value must be encoded in UTF-8 and comply with the naming conventions of Object Storage Service (OSS) buckets.
     *   If Key is set to ThroughputList, set Value to the dataflow throughput. Combined query is supported.
     *   If Key is set to Description, set Value to a dataflow description or a part of the dataflow description.
     *   If Key is set to Status, set Value to the dataflow status.
     *
     * @example FsetIds
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
