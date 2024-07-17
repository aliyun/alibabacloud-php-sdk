<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyDataSourceDeployRequest\extend;

use AlibabaCloud\Tea\Model;

class saro extends Model
{
    /**
     * @description The path of the SARO data source.
     *
     * @example /
     *
     * @var string
     */
    public $path;

    /**
     * @description The version number of the SARO data source.
     *
     * @example 1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'path'    => 'path',
        'version' => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return saro
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
