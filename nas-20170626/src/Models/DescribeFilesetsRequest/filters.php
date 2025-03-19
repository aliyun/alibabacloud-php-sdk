<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFilesetsRequest;

use AlibabaCloud\Tea\Model;

class filters extends Model
{
    /**
     * @description The filter name. Valid values:
     *
     *   FsetIds: filters filesets by fileset ID.
     *   FileSystemPath: filters filesets based on the path of a fileset in a CPFS file system.
     *   Description: filters filesets based on the fileset description.
     *   QuotaExists: filters filesets based on whether quotas exist.
     *
     * >  Only CPFS for LINGJUN V2.7.0 and later support the QuotaExists parameter.
     *
     * @example FsetIds
     *
     * @var string
     */
    public $key;

    /**
     * @description The filter value. This parameter does not support wildcards.
     *
     *   If Key is set to FsetIds, set Value to a fileset ID or a part of the fileset ID. You can specify a fileset ID or a group of fileset IDs. You can specify a maximum of 10 fileset IDs. Example: `fset-1902718ea0ae****` or `fset-1902718ea0ae****,fset-3212718ea0ae****`.
     *   If Key is set to FileSystemPath, set Value to the path or a part of the path of a fileset in a CPFS file system. The value must be 2 to 1024 characters in length. The value must be encoded in UTF-8.
     *   If Key is set to Description, set Value to a fileset description or a part of the fileset description.
     *   If Key is set to QuotaExists, set Value to true or false. If you do not specify the parameter, all filesets are returned.
     *
     * @example fset-1902718ea0ae****,fset-3212718ea0ae****
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key' => 'Key',
        'value' => 'Value',
    ];

    public function validate() {}

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
