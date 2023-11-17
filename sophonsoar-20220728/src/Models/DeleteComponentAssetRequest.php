<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DeleteComponentAssetRequest extends Model
{
    /**
     * @example 12x
     *
     * @var int
     */
    public $assetId;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'assetId' => 'AssetId',
        'lang'    => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetId) {
            $res['AssetId'] = $this->assetId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteComponentAssetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetId'])) {
            $model->assetId = $map['AssetId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
