<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListImageBuildRiskItemResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $itemKey;
    /**
     * @var string
     */
    public $itemName;
    protected $_name = [
        'itemKey'  => 'ItemKey',
        'itemName' => 'ItemName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemKey) {
            $res['ItemKey'] = $this->itemKey;
        }

        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
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
        if (isset($map['ItemKey'])) {
            $model->itemKey = $map['ItemKey'];
        }

        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }

        return $model;
    }
}
