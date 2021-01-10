<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListClientPluginsResponseBody;

use AlibabaCloud\Tea\Model;

class clientPlugins extends Model
{
    /**
     * @var string
     */
    public $pkgName;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'pkgName' => 'PkgName',
        'name'    => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pkgName) {
            $res['PkgName'] = $this->pkgName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clientPlugins
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PkgName'])) {
            $model->pkgName = $map['PkgName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
