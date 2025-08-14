<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class ModifyControlPolicyPositionRequest extends Model
{
    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $newOrder;

    /**
     * @var string
     */
    public $oldOrder;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'direction' => 'Direction',
        'lang' => 'Lang',
        'newOrder' => 'NewOrder',
        'oldOrder' => 'OldOrder',
        'sourceIp' => 'SourceIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->newOrder) {
            $res['NewOrder'] = $this->newOrder;
        }

        if (null !== $this->oldOrder) {
            $res['OldOrder'] = $this->oldOrder;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['NewOrder'])) {
            $model->newOrder = $map['NewOrder'];
        }

        if (isset($map['OldOrder'])) {
            $model->oldOrder = $map['OldOrder'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
