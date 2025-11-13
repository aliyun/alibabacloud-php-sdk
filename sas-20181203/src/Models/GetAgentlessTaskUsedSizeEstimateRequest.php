<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetAgentlessTaskUsedSizeEstimateRequest extends Model
{
    /**
     * @var string
     */
    public $assetSelectionType;
    protected $_name = [
        'assetSelectionType' => 'AssetSelectionType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetSelectionType) {
            $res['AssetSelectionType'] = $this->assetSelectionType;
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
        if (isset($map['AssetSelectionType'])) {
            $model->assetSelectionType = $map['AssetSelectionType'];
        }

        return $model;
    }
}
