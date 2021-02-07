<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\Tea\Model;

class DeletePkgVersionRequest extends Model
{
    /**
     * @var string
     */
    public $pkgVersionId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'pkgVersionId' => 'PkgVersionId',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pkgVersionId) {
            $res['PkgVersionId'] = $this->pkgVersionId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePkgVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PkgVersionId'])) {
            $model->pkgVersionId = $map['PkgVersionId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
