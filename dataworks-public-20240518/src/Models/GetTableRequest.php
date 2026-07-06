<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class GetTableRequest extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $includeBusinessMetadata;

    /**
     * @var bool
     */
    public $includeExtendedProperties;
    protected $_name = [
        'id' => 'Id',
        'includeBusinessMetadata' => 'IncludeBusinessMetadata',
        'includeExtendedProperties' => 'IncludeExtendedProperties',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->includeBusinessMetadata) {
            $res['IncludeBusinessMetadata'] = $this->includeBusinessMetadata;
        }

        if (null !== $this->includeExtendedProperties) {
            $res['IncludeExtendedProperties'] = $this->includeExtendedProperties;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IncludeBusinessMetadata'])) {
            $model->includeBusinessMetadata = $map['IncludeBusinessMetadata'];
        }

        if (isset($map['IncludeExtendedProperties'])) {
            $model->includeExtendedProperties = $map['IncludeExtendedProperties'];
        }

        return $model;
    }
}
