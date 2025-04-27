<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class ListDefaultCollectorConfigurationsRequest extends Model
{
    /**
     * @var string
     */
    public $resType;

    /**
     * @var string
     */
    public $resVersion;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'resType' => 'resType',
        'resVersion' => 'resVersion',
        'sourceType' => 'sourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resType) {
            $res['resType'] = $this->resType;
        }

        if (null !== $this->resVersion) {
            $res['resVersion'] = $this->resVersion;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
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
        if (isset($map['resType'])) {
            $model->resType = $map['resType'];
        }

        if (isset($map['resVersion'])) {
            $model->resVersion = $map['resVersion'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        return $model;
    }
}
