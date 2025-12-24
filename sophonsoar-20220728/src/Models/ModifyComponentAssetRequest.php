<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;

class ModifyComponentAssetRequest extends Model
{
    /**
     * @var string
     */
    public $assetConfig;

    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'assetConfig' => 'AssetConfig',
        'lang' => 'Lang',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetConfig) {
            $res['AssetConfig'] = $this->assetConfig;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (isset($map['AssetConfig'])) {
            $model->assetConfig = $map['AssetConfig'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
