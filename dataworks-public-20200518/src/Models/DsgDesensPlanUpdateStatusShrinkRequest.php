<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class DsgDesensPlanUpdateStatusShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $idsShrink;
    /**
     * @var string
     */
    public $sceneCode;
    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'idsShrink' => 'Ids',
        'sceneCode' => 'SceneCode',
        'status'    => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->idsShrink) {
            $res['Ids'] = $this->idsShrink;
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
            $model->idsShrink = $map['Ids'];
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
