<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListPendingApprovalsResponseBody\data\data\contents;

use AlibabaCloud\Dara\Model;

class resource extends Model
{
    /**
     * @var string
     */
    public $defSchema;

    /**
     * @var string
     */
    public $defVersion;

    /**
     * @var mixed[]
     */
    public $metaData;
    protected $_name = [
        'defSchema' => 'DefSchema',
        'defVersion' => 'DefVersion',
        'metaData' => 'MetaData',
    ];

    public function validate()
    {
        if (\is_array($this->metaData)) {
            Model::validateArray($this->metaData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defSchema) {
            $res['DefSchema'] = $this->defSchema;
        }

        if (null !== $this->defVersion) {
            $res['DefVersion'] = $this->defVersion;
        }

        if (null !== $this->metaData) {
            if (\is_array($this->metaData)) {
                $res['MetaData'] = [];
                foreach ($this->metaData as $key1 => $value1) {
                    $res['MetaData'][$key1] = $value1;
                }
            }
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
        if (isset($map['DefSchema'])) {
            $model->defSchema = $map['DefSchema'];
        }

        if (isset($map['DefVersion'])) {
            $model->defVersion = $map['DefVersion'];
        }

        if (isset($map['MetaData'])) {
            if (!empty($map['MetaData'])) {
                $model->metaData = [];
                foreach ($map['MetaData'] as $key1 => $value1) {
                    $model->metaData[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
