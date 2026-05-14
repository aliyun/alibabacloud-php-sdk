<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hologram\V20220601\Models\CreateExternalDatabaseRequest\externalConfig;

class CreateExternalDatabaseRequest extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $defaultUserMapping;

    /**
     * @var externalConfig[]
     */
    public $externalConfig;

    /**
     * @var string
     */
    public $metastoreType;
    protected $_name = [
        'comment' => 'comment',
        'databaseName' => 'databaseName',
        'defaultUserMapping' => 'defaultUserMapping',
        'externalConfig' => 'externalConfig',
        'metastoreType' => 'metastoreType',
    ];

    public function validate()
    {
        if (\is_array($this->externalConfig)) {
            Model::validateArray($this->externalConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }

        if (null !== $this->databaseName) {
            $res['databaseName'] = $this->databaseName;
        }

        if (null !== $this->defaultUserMapping) {
            $res['defaultUserMapping'] = $this->defaultUserMapping;
        }

        if (null !== $this->externalConfig) {
            if (\is_array($this->externalConfig)) {
                $res['externalConfig'] = [];
                $n1 = 0;
                foreach ($this->externalConfig as $item1) {
                    $res['externalConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metastoreType) {
            $res['metastoreType'] = $this->metastoreType;
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
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }

        if (isset($map['databaseName'])) {
            $model->databaseName = $map['databaseName'];
        }

        if (isset($map['defaultUserMapping'])) {
            $model->defaultUserMapping = $map['defaultUserMapping'];
        }

        if (isset($map['externalConfig'])) {
            if (!empty($map['externalConfig'])) {
                $model->externalConfig = [];
                $n1 = 0;
                foreach ($map['externalConfig'] as $item1) {
                    $model->externalConfig[$n1] = externalConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['metastoreType'])) {
            $model->metastoreType = $map['metastoreType'];
        }

        return $model;
    }
}
