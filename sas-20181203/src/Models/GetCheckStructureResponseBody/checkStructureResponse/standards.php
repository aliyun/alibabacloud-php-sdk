<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckStructureResponseBody\checkStructureResponse;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckStructureResponseBody\checkStructureResponse\standards\requirements;

class standards extends Model
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var requirements[]
     */
    public $requirements;
    /**
     * @var string
     */
    public $showName;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'id'           => 'Id',
        'requirements' => 'Requirements',
        'showName'     => 'ShowName',
        'type'         => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->requirements)) {
            Model::validateArray($this->requirements);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->requirements) {
            if (\is_array($this->requirements)) {
                $res['Requirements'] = [];
                $n1                  = 0;
                foreach ($this->requirements as $item1) {
                    $res['Requirements'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['Requirements'])) {
            if (!empty($map['Requirements'])) {
                $model->requirements = [];
                $n1                  = 0;
                foreach ($map['Requirements'] as $item1) {
                    $model->requirements[$n1++] = requirements::fromMap($item1);
                }
            }
        }

        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
