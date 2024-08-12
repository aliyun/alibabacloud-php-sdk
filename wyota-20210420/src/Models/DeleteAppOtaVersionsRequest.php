<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class DeleteAppOtaVersionsRequest extends Model
{
    /**
     * @var string[]
     */
    public $versionUidList;
    protected $_name = [
        'versionUidList' => 'VersionUidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->versionUidList) {
            $res['VersionUidList'] = $this->versionUidList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAppOtaVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VersionUidList'])) {
            if (!empty($map['VersionUidList'])) {
                $model->versionUidList = $map['VersionUidList'];
            }
        }

        return $model;
    }
}
