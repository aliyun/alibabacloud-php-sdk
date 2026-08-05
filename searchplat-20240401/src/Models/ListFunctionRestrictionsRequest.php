<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models;

use AlibabaCloud\Dara\Model;

class ListFunctionRestrictionsRequest extends Model
{
    /**
     * @var string
     */
    public $modelType;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'modelType' => 'modelType',
        'region' => 'region',
        'source' => 'source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelType) {
            $res['modelType'] = $this->modelType;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
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
        if (isset($map['modelType'])) {
            $model->modelType = $map['modelType'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        return $model;
    }
}
