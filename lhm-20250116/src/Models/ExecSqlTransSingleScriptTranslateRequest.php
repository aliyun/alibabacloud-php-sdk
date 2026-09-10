<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class ExecSqlTransSingleScriptTranslateRequest extends Model
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
     * @var string[]
     */
    public $tableMapping;

    /**
     * @var string
     */
    public $targetDialect;
    protected $_name = [
        'sourceDialect' => 'sourceDialect',
        'sourceSqlScript' => 'sourceSqlScript',
        'tableMapping' => 'tableMapping',
        'targetDialect' => 'targetDialect',
    ];

    public function validate()
    {
        if (\is_array($this->tableMapping)) {
            Model::validateArray($this->tableMapping);
        }
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

        if (null !== $this->tableMapping) {
            if (\is_array($this->tableMapping)) {
                $res['tableMapping'] = [];
                $n1 = 0;
                foreach ($this->tableMapping as $item1) {
                    $res['tableMapping'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['tableMapping'])) {
            if (!empty($map['tableMapping'])) {
                $model->tableMapping = [];
                $n1 = 0;
                foreach ($map['tableMapping'] as $item1) {
                    $model->tableMapping[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['targetDialect'])) {
            $model->targetDialect = $map['targetDialect'];
        }

        return $model;
    }
}
