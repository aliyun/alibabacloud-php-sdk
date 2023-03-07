<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListFileSystemWithMountTargetsResponseBody\fileSystemList\fileSystems\packageList;

use AlibabaCloud\Tea\Model;

class packages extends Model
{
    /**
     * @description The ID of the storage plan.
     *
     * @example naspackage-0be9c4b624-37****
     *
     * @var string
     */
    public $packageId;
    protected $_name = [
        'packageId' => 'PackageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->packageId) {
            $res['PackageId'] = $this->packageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return packages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PackageId'])) {
            $model->packageId = $map['PackageId'];
        }

        return $model;
    }
}
