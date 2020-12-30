<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\CreateInstanceResponseBody\instance;

use AlibabaCloud\Tea\Model;

class successLoginNames extends Model
{
    /**
     * @var string[]
     */
    public $successLoginName;
    protected $_name = [
        'successLoginName' => 'SuccessLoginName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->successLoginName) {
            $res['SuccessLoginName'] = $this->successLoginName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return successLoginNames
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SuccessLoginName'])) {
            if (!empty($map['SuccessLoginName'])) {
                $model->successLoginName = $map['SuccessLoginName'];
            }
        }

        return $model;
    }
}
