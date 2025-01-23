<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class DsgDesensPlanUpdateStatusRequest extends Model
{
    /**
     * @var int[]
     */
    public $ids;
    /**
     * @var string
     */
    public $sceneCode;
    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'ids'       => 'Ids',
        'sceneCode' => 'SceneCode',
        'status'    => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->ids)) {
            Model::validateArray($this->ids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ids) {
            if (\is_array($this->ids)) {
                $res['Ids'] = [];
                $n1         = 0;
                foreach ($this->ids as $item1) {
                    $res['Ids'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Ids'])) {
            if (!empty($map['Ids'])) {
                $model->ids = [];
                $n1         = 0;
                foreach ($map['Ids'] as $item1) {
                    $model->ids[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
