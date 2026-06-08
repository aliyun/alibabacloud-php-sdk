<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetApplicationContentsResponseBody\data\contents;

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
     * @var string
     */
    public $metaData;
    protected $_name = [
        'defSchema' => 'DefSchema',
        'defVersion' => 'DefVersion',
        'metaData' => 'MetaData',
    ];

    public function validate()
    {
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
            $res['MetaData'] = $this->metaData;
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
            $model->metaData = $map['MetaData'];
        }

        return $model;
    }
}
