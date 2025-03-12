<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAssetsPropertyItemResponseBody;

use AlibabaCloud\Tea\Model;

class propertyItems extends Model
{
    /**
     * @description The number of servers related to the asset fingerprints.
     *
     * @example 23
     *
     * @var int
     */
    public $count;

    /**
     * @description The endpoint.
     *
     * > This parameter is returned only when **Biz** is set to **web_server**.
     * @example localhost
     *
     * @var string
     */
    public $domain;

    /**
     * @description The name of the module.
     *
     * > This parameter is returned only when **Biz** is set to **lkm**.
     * @example alihids
     *
     * @var string
     */
    public $moduleName;

    /**
     * @description The path to the startup item.
     *
     * > This parameter is returned only when **Biz** is set to **autorun**.
     * @example C:/Program Files/****
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'count'      => 'Count',
        'domain'     => 'Domain',
        'moduleName' => 'ModuleName',
        'path'       => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
