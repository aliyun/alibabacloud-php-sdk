<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBResourceGroupRequest\rayConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBResourceGroupRequest\rayConfig\appConfig\imageSelector;

class appConfig extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appType;

    /**
     * @var imageSelector
     */
    public $imageSelector;
    protected $_name = [
        'appName' => 'AppName',
        'appType' => 'AppType',
        'imageSelector' => 'ImageSelector',
    ];

    public function validate()
    {
        if (null !== $this->imageSelector) {
            $this->imageSelector->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->imageSelector) {
            $res['ImageSelector'] = null !== $this->imageSelector ? $this->imageSelector->toArray($noStream) : $this->imageSelector;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['ImageSelector'])) {
            $model->imageSelector = imageSelector::fromMap($map['ImageSelector']);
        }

        return $model;
    }
}
