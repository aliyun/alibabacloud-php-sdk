<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class CreateAnchorRequest extends Model
{
    /**
     * @var string
     */
    public $anchorMaterialName;
    /**
     * @var string
     */
    public $coverUrl;
    /**
     * @var string
     */
    public $digitalHumanType;
    /**
     * @var string
     */
    public $gender;
    /**
     * @var string
     */
    public $useScene;
    protected $_name = [
        'anchorMaterialName' => 'anchorMaterialName',
        'coverUrl'           => 'coverUrl',
        'digitalHumanType'   => 'digitalHumanType',
        'gender'             => 'gender',
        'useScene'           => 'useScene',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anchorMaterialName) {
            $res['anchorMaterialName'] = $this->anchorMaterialName;
        }

        if (null !== $this->coverUrl) {
            $res['coverUrl'] = $this->coverUrl;
        }

        if (null !== $this->digitalHumanType) {
            $res['digitalHumanType'] = $this->digitalHumanType;
        }

        if (null !== $this->gender) {
            $res['gender'] = $this->gender;
        }

        if (null !== $this->useScene) {
            $res['useScene'] = $this->useScene;
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
        if (isset($map['anchorMaterialName'])) {
            $model->anchorMaterialName = $map['anchorMaterialName'];
        }

        if (isset($map['coverUrl'])) {
            $model->coverUrl = $map['coverUrl'];
        }

        if (isset($map['digitalHumanType'])) {
            $model->digitalHumanType = $map['digitalHumanType'];
        }

        if (isset($map['gender'])) {
            $model->gender = $map['gender'];
        }

        if (isset($map['useScene'])) {
            $model->useScene = $map['useScene'];
        }

        return $model;
    }
}
