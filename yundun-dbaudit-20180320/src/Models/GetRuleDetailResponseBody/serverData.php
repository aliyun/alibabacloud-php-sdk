<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetRuleDetailResponseBody;

use AlibabaCloud\Tea\Model;

class serverData extends Model
{
    /**
     * @var string
     */
    public $jsonResult;
    protected $_name = [
        'jsonResult' => 'JsonResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jsonResult) {
            $res['JsonResult'] = $this->jsonResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serverData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JsonResult'])) {
            $model->jsonResult = $map['JsonResult'];
        }

        return $model;
    }
}
