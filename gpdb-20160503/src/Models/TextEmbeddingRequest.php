<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class TextEmbeddingRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string[]
     */
    public $input;

    /**
     * @var string
     */
    public $model;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'input' => 'Input',
        'model' => 'Model',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->input)) {
            Model::validateArray($this->input);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->input) {
            if (\is_array($this->input)) {
                $res['Input'] = [];
                $n1 = 0;
                foreach ($this->input as $item1) {
                    $res['Input'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['Input'])) {
            if (!empty($map['Input'])) {
                $model->input = [];
                $n1 = 0;
                foreach ($map['Input'] as $item1) {
                    $model->input[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
