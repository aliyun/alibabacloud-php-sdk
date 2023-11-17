<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class ModifyComponentAssetRequest extends Model
{
    /**
     * @var string
     */
    public $assetConfig;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'assetConfig' => 'AssetConfig',
        'lang'        => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ModifyComponentAssetRequest
     */
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
