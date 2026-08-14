<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\VideoGenerationRequest\input;

use AlibabaCloud\Dara\Model;

class assetBindings extends Model
{
    /**
     * @var int
     */
    public $assetIndex;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $slot;
    protected $_name = [
        'assetIndex' => 'AssetIndex',
        'description' => 'Description',
        'slot' => 'Slot',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetIndex) {
            $res['AssetIndex'] = $this->assetIndex;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->slot) {
            $res['Slot'] = $this->slot;
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
        if (isset($map['AssetIndex'])) {
            $model->assetIndex = $map['AssetIndex'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Slot'])) {
            $model->slot = $map['Slot'];
        }

        return $model;
    }
}
