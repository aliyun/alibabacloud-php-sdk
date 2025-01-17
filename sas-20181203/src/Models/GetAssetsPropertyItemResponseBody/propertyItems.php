<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAssetsPropertyItemResponseBody;

use AlibabaCloud\Dara\Model;

class propertyItems extends Model
{
    /**
     * @var int
     */
    public $count;
    /**
     * @var string
     */
    public $domain;
    /**
     * @var string
     */
    public $moduleName;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
