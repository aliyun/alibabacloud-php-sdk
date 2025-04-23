<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListFileSystemWithMountTargetsResponseBody\fileSystemList\fileSystems\packageList;

use AlibabaCloud\Dara\Model;

class packages extends Model
{
    /**
     * @var string
     */
    public $packageId;
    protected $_name = [
        'packageId' => 'PackageId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->packageId) {
            $res['PackageId'] = $this->packageId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PackageId'])) {
            $model->packageId = $map['PackageId'];
        }

        return $model;
    }
}
