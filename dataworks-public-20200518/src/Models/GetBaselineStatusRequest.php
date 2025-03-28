<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class GetBaselineStatusRequest extends Model
{
    /**
     * @var int
     */
    public $baselineId;

    /**
     * @var string
     */
    public $bizdate;

    /**
     * @var int
     */
    public $inGroupId;
    protected $_name = [
        'baselineId' => 'BaselineId',
        'bizdate' => 'Bizdate',
        'inGroupId' => 'InGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }

        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }

        if (null !== $this->inGroupId) {
            $res['InGroupId'] = $this->inGroupId;
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
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }

        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }

        if (isset($map['InGroupId'])) {
            $model->inGroupId = $map['InGroupId'];
        }

        return $model;
    }
}
