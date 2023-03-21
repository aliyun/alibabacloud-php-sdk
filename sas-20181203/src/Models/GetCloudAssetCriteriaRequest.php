<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCloudAssetCriteriaRequest\cloudAssetTypes;
use AlibabaCloud\Tea\Model;

class GetCloudAssetCriteriaRequest extends Model
{
    /**
     * @var cloudAssetTypes[]
     */
    public $cloudAssetTypes;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'cloudAssetTypes' => 'CloudAssetTypes',
        'value'           => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudAssetTypes) {
            $res['CloudAssetTypes'] = [];
            if (null !== $this->cloudAssetTypes && \is_array($this->cloudAssetTypes)) {
                $n = 0;
                foreach ($this->cloudAssetTypes as $item) {
                    $res['CloudAssetTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCloudAssetCriteriaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudAssetTypes'])) {
            if (!empty($map['CloudAssetTypes'])) {
                $model->cloudAssetTypes = [];
                $n                      = 0;
                foreach ($map['CloudAssetTypes'] as $item) {
                    $model->cloudAssetTypes[$n++] = null !== $item ? cloudAssetTypes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
