<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PbcSubscribe extends Model
{
    /**
     * @var string
     */
    public $developerId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $pbcName;

    /**
     * @var string
     */
    public $purpose;

    /**
     * @var string
     */
    public $subPbcName;
    protected $_name = [
        'developerId' => 'developerId',
        'id' => 'id',
        'pbcName' => 'pbcName',
        'purpose' => 'purpose',
        'subPbcName' => 'subPbcName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->developerId) {
            $res['developerId'] = $this->developerId;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->pbcName) {
            $res['pbcName'] = $this->pbcName;
        }

        if (null !== $this->purpose) {
            $res['purpose'] = $this->purpose;
        }

        if (null !== $this->subPbcName) {
            $res['subPbcName'] = $this->subPbcName;
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
        if (isset($map['developerId'])) {
            $model->developerId = $map['developerId'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['pbcName'])) {
            $model->pbcName = $map['pbcName'];
        }

        if (isset($map['purpose'])) {
            $model->purpose = $map['purpose'];
        }

        if (isset($map['subPbcName'])) {
            $model->subPbcName = $map['subPbcName'];
        }

        return $model;
    }
}
