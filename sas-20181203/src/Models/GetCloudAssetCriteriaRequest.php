<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCloudAssetCriteriaRequest\cloudAssetTypes;

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
        'value' => 'Value',
    ];

    public function validate()
    {
        if (\is_array($this->cloudAssetTypes)) {
            Model::validateArray($this->cloudAssetTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudAssetTypes) {
            if (\is_array($this->cloudAssetTypes)) {
                $res['CloudAssetTypes'] = [];
                $n1 = 0;
                foreach ($this->cloudAssetTypes as $item1) {
                    $res['CloudAssetTypes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['CloudAssetTypes'])) {
            if (!empty($map['CloudAssetTypes'])) {
                $model->cloudAssetTypes = [];
                $n1 = 0;
                foreach ($map['CloudAssetTypes'] as $item1) {
                    $model->cloudAssetTypes[$n1] = cloudAssetTypes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
