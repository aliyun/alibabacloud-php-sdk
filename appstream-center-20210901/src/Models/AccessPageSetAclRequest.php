<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class AccessPageSetAclRequest extends Model
{
    /**
     * @var string
     */
    public $accessMode;

    /**
     * @var string
     */
    public $accessPageId;

    /**
     * @var string
     */
    public $accessPageName;

    /**
     * @var int
     */
    public $effectTime;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'accessMode' => 'AccessMode',
        'accessPageId' => 'AccessPageId',
        'accessPageName' => 'AccessPageName',
        'effectTime' => 'EffectTime',
        'unit' => 'Unit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessMode) {
            $res['AccessMode'] = $this->accessMode;
        }

        if (null !== $this->accessPageId) {
            $res['AccessPageId'] = $this->accessPageId;
        }

        if (null !== $this->accessPageName) {
            $res['AccessPageName'] = $this->accessPageName;
        }

        if (null !== $this->effectTime) {
            $res['EffectTime'] = $this->effectTime;
        }

        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
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
        if (isset($map['AccessMode'])) {
            $model->accessMode = $map['AccessMode'];
        }

        if (isset($map['AccessPageId'])) {
            $model->accessPageId = $map['AccessPageId'];
        }

        if (isset($map['AccessPageName'])) {
            $model->accessPageName = $map['AccessPageName'];
        }

        if (isset($map['EffectTime'])) {
            $model->effectTime = $map['EffectTime'];
        }

        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
