<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\ApplyDataFlowAutoRefreshRequest;

use AlibabaCloud\Tea\Model;

class autoRefreshs extends Model
{
    /**
     * @description The automatic update directory. CPFS automatically checks whether the source data only in the directory is updated and imports the updated data.
     *
     * Limits:
     *
     *   The directory must be 2 to 1,024 characters in length.
     *   The directory must be encoded in UTF-8.
     *   The directory must start and end with a forward slash (/).
     *
     * This parameter is required.
     * @example /prefix1/prefix2/
     *
     * @var string
     */
    public $refreshPath;
    protected $_name = [
        'refreshPath' => 'RefreshPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->refreshPath) {
            $res['RefreshPath'] = $this->refreshPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoRefreshs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RefreshPath'])) {
            $model->refreshPath = $map['RefreshPath'];
        }

        return $model;
    }
}
