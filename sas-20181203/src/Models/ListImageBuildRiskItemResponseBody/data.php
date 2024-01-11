<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListImageBuildRiskItemResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The key of the name for the image build risk item.
     *
     * @example key
     *
     * @var string
     */
    public $itemKey;

    /**
     * @description The name of the name for the image build risk item.
     *
     * @example itemName.
     *
     * @var string
     */
    public $itemName;
    protected $_name = [
        'itemKey'  => 'ItemKey',
        'itemName' => 'ItemName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
