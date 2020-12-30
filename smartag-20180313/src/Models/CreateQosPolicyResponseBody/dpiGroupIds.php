<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\CreateQosPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class dpiGroupIds extends Model
{
    /**
     * @var string[]
     */
    public $dpiGroupId;
    protected $_name = [
        'dpiGroupId' => 'DpiGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dpiGroupId) {
            $res['DpiGroupId'] = $this->dpiGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dpiGroupIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DpiGroupId'])) {
            if (!empty($map['DpiGroupId'])) {
                $model->dpiGroupId = $map['DpiGroupId'];
            }
        }

        return $model;
    }
}
