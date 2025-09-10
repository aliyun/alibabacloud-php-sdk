<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\relations;

use AlibabaCloud\Dara\Model;

class relations extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $sourceEntity;

    /**
     * @var string
     */
    public $targetEntity;
    protected $_name = [
        'description' => 'Description',
        'fileName' => 'FileName',
        'id' => 'Id',
        'sourceEntity' => 'SourceEntity',
        'targetEntity' => 'TargetEntity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->sourceEntity) {
            $res['SourceEntity'] = $this->sourceEntity;
        }

        if (null !== $this->targetEntity) {
            $res['TargetEntity'] = $this->targetEntity;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['SourceEntity'])) {
            $model->sourceEntity = $map['SourceEntity'];
        }

        if (isset($map['TargetEntity'])) {
            $model->targetEntity = $map['TargetEntity'];
        }

        return $model;
    }
}
