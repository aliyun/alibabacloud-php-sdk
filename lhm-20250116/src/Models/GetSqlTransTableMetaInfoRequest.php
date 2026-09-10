<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class GetSqlTransTableMetaInfoRequest extends Model
{
    /**
     * @var string
     */
    public $sourceDialect;

    /**
     * @var string
     */
    public $sourceSqlScript;

    /**
     * @var string
     */
    public $targetDialect;
    protected $_name = [
        'sourceDialect' => 'sourceDialect',
        'sourceSqlScript' => 'sourceSqlScript',
        'targetDialect' => 'targetDialect',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceDialect) {
            $res['sourceDialect'] = $this->sourceDialect;
        }

        if (null !== $this->sourceSqlScript) {
            $res['sourceSqlScript'] = $this->sourceSqlScript;
        }

        if (null !== $this->targetDialect) {
            $res['targetDialect'] = $this->targetDialect;
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
        if (isset($map['sourceDialect'])) {
            $model->sourceDialect = $map['sourceDialect'];
        }

        if (isset($map['sourceSqlScript'])) {
            $model->sourceSqlScript = $map['sourceSqlScript'];
        }

        if (isset($map['targetDialect'])) {
            $model->targetDialect = $map['targetDialect'];
        }

        return $model;
    }
}
