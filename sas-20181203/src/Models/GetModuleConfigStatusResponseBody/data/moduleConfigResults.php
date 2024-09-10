<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetModuleConfigStatusResponseBody\data;

use AlibabaCloud\Tea\Model;

class moduleConfigResults extends Model
{
    /**
     * @example Ransom
     *
     * @var string
     */
    public $moduleName;

    /**
     * @example true
     *
     * @var bool
     */
    public $pass;
    protected $_name = [
        'moduleName' => 'ModuleName',
        'pass'       => 'Pass',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->pass) {
            $res['Pass'] = $this->pass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moduleConfigResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['Pass'])) {
            $model->pass = $map['Pass'];
        }

        return $model;
    }
}
