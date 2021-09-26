<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListSupportDbTypesResponseBody\typeList;

use AlibabaCloud\Tea\Model;

class dbVersions extends Model
{
    /**
     * @var string
     */
    public $dbVersionName;

    /**
     * @var int
     */
    public $dbVersion;
    protected $_name = [
        'dbVersionName' => 'DbVersionName',
        'dbVersion'     => 'DbVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbVersionName) {
            $res['DbVersionName'] = $this->dbVersionName;
        }
        if (null !== $this->dbVersion) {
            $res['DbVersion'] = $this->dbVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbVersionName'])) {
            $model->dbVersionName = $map['DbVersionName'];
        }
        if (isset($map['DbVersion'])) {
            $model->dbVersion = $map['DbVersion'];
        }

        return $model;
    }
}
