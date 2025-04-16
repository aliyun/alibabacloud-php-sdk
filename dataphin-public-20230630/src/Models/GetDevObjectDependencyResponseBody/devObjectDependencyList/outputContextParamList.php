<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDevObjectDependencyResponseBody\devObjectDependencyList;

use AlibabaCloud\Dara\Model;

class outputContextParamList extends Model
{
    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $key;
    protected $_name = [
        'defaultValue' => 'DefaultValue',
        'description' => 'Description',
        'key' => 'Key',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
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
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        return $model;
    }
}
