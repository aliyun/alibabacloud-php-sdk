<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class ListClientPluginVersionsRequest extends Model
{
    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $pkgName;
    protected $_name = [
        'osType'  => 'OsType',
        'pkgName' => 'PkgName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->pkgName) {
            $res['PkgName'] = $this->pkgName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClientPluginVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['PkgName'])) {
            $model->pkgName = $map['PkgName'];
        }

        return $model;
    }
}
