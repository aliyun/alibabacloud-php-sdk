<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\CreateFpShotDBResponseBody;

use AlibabaCloud\Tea\Model;

class fpShotDB extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $fpDBId;

    /**
     * @var int
     */
    public $modelId;

    /**
     * @var string
     */
    public $config;
    protected $_name = [
        'description' => 'Description',
        'state'       => 'State',
        'name'        => 'Name',
        'fpDBId'      => 'FpDBId',
        'modelId'     => 'ModelId',
        'config'      => 'Config',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->fpDBId) {
            $res['FpDBId'] = $this->fpDBId;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fpShotDB
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['FpDBId'])) {
            $model->fpDBId = $map['FpDBId'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        return $model;
    }
}
