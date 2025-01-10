<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\UpdateVpdResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The ID of the VPD instance.
     *
     * @example vpd-lg4dppgi
     *
     * @var string
     */
    public $vpdId;
    protected $_name = [
        'vpdId' => 'VpdId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }

        return $model;
    }
}
