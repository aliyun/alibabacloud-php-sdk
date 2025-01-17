<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetModuleConfigStatusResponseBody\data;

use AlibabaCloud\Dara\Model;

class moduleConfigResults extends Model
{
    /**
     * @var string
     */
    public $moduleName;
    /**
     * @var bool
     */
    public $pass;
    protected $_name = [
        'moduleName' => 'ModuleName',
        'pass'       => 'Pass',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
