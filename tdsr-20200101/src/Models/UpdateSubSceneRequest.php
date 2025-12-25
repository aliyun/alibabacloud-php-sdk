<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Dara\Model;

class UpdateSubSceneRequest extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var float[]
     */
    public $viewPoint;
    protected $_name = [
        'id' => 'Id',
        'name' => 'Name',
        'viewPoint' => 'ViewPoint',
    ];

    public function validate()
    {
        if (\is_array($this->viewPoint)) {
            Model::validateArray($this->viewPoint);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->viewPoint) {
            if (\is_array($this->viewPoint)) {
                $res['ViewPoint'] = [];
                $n1 = 0;
                foreach ($this->viewPoint as $item1) {
                    $res['ViewPoint'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ViewPoint'])) {
            if (!empty($map['ViewPoint'])) {
                $model->viewPoint = [];
                $n1 = 0;
                foreach ($map['ViewPoint'] as $item1) {
                    $model->viewPoint[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
