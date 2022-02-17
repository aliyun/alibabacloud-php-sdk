<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewDataResponseBody\data\tags\config;

use AlibabaCloud\Tea\Model;

class buttonConfig extends Model
{
    /**
     * @var string
     */
    public $customText;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'customText' => 'CustomText',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customText) {
            $res['CustomText'] = $this->customText;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return buttonConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomText'])) {
            $model->customText = $map['CustomText'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
