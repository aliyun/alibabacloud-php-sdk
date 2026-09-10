<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\LHM\V20250116\Models\CreateExecuteSqlConversionRequest\sourceSqlScript;

class CreateExecuteSqlConversionRequest extends Model
{
    /**
     * @var string
     */
    public $sourceDialect;

    /**
     * @var sourceSqlScript[]
     */
    public $sourceSqlScript;

    /**
     * @var string
     */
    public $targetDialect;

    /**
     * @var string
     */
    public $taskDescription;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'sourceDialect' => 'sourceDialect',
        'sourceSqlScript' => 'sourceSqlScript',
        'targetDialect' => 'targetDialect',
        'taskDescription' => 'taskDescription',
        'taskName' => 'taskName',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->sourceSqlScript)) {
            Model::validateArray($this->sourceSqlScript);
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
            if (\is_array($this->sourceSqlScript)) {
                $res['sourceSqlScript'] = [];
                $n1 = 0;
                foreach ($this->sourceSqlScript as $item1) {
                    $res['sourceSqlScript'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targetDialect) {
            $res['targetDialect'] = $this->targetDialect;
        }

        if (null !== $this->taskDescription) {
            $res['taskDescription'] = $this->taskDescription;
        }

        if (null !== $this->taskName) {
            $res['taskName'] = $this->taskName;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
            if (!empty($map['sourceSqlScript'])) {
                $model->sourceSqlScript = [];
                $n1 = 0;
                foreach ($map['sourceSqlScript'] as $item1) {
                    $model->sourceSqlScript[$n1] = sourceSqlScript::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['targetDialect'])) {
            $model->targetDialect = $map['targetDialect'];
        }

        if (isset($map['taskDescription'])) {
            $model->taskDescription = $map['taskDescription'];
        }

        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
