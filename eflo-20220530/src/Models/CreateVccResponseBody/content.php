<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVccResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @example vcc-cn-zvp2w222001
     *
     * @var string
     */
    public $vccId;
    protected $_name = [
        'vccId' => 'VccId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vccId) {
            $res['VccId'] = $this->vccId;
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
        if (isset($map['VccId'])) {
            $model->vccId = $map['VccId'];
        }

        return $model;
    }
}
