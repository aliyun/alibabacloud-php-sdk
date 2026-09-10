<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class GetSqlTableLineageRequest extends Model
{
    /**
     * @var string
     */
    public $defaultSchema;

    /**
     * @var string
     */
    public $dialect;

    /**
     * @var string
     */
    public $sourceSqlScriptBase64;
    protected $_name = [
        'defaultSchema' => 'defaultSchema',
        'dialect' => 'dialect',
        'sourceSqlScriptBase64' => 'sourceSqlScriptBase64',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultSchema) {
            $res['defaultSchema'] = $this->defaultSchema;
        }

        if (null !== $this->dialect) {
            $res['dialect'] = $this->dialect;
        }

        if (null !== $this->sourceSqlScriptBase64) {
            $res['sourceSqlScriptBase64'] = $this->sourceSqlScriptBase64;
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
        if (isset($map['defaultSchema'])) {
            $model->defaultSchema = $map['defaultSchema'];
        }

        if (isset($map['dialect'])) {
            $model->dialect = $map['dialect'];
        }

        if (isset($map['sourceSqlScriptBase64'])) {
            $model->sourceSqlScriptBase64 = $map['sourceSqlScriptBase64'];
        }

        return $model;
    }
}
