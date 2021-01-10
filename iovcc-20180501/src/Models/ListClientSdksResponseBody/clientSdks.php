<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListClientSdksResponseBody;

use AlibabaCloud\Tea\Model;

class clientSdks extends Model
{
    /**
     * @var int
     */
    public $osType;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $pkgName;

    /**
     * @var int
     */
    public $pkgType;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'osType'      => 'OsType',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'name'        => 'Name',
        'pkgName'     => 'PkgName',
        'pkgType'     => 'PkgType',
        'id'          => 'Id',
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
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pkgName) {
            $res['PkgName'] = $this->pkgName;
        }
        if (null !== $this->pkgType) {
            $res['PkgType'] = $this->pkgType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clientSdks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PkgName'])) {
            $model->pkgName = $map['PkgName'];
        }
        if (isset($map['PkgType'])) {
            $model->pkgType = $map['PkgType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
