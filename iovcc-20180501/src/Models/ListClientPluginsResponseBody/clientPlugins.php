<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListClientPluginsResponseBody;

use AlibabaCloud\Tea\Model;

class clientPlugins extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $pkgName;
    protected $_name = [
        'name'    => 'Name',
        'pkgName' => 'PkgName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pkgName) {
            $res['PkgName'] = $this->pkgName;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PkgName'])) {
            $model->pkgName = $map['PkgName'];
        }

        return $model;
    }
}
