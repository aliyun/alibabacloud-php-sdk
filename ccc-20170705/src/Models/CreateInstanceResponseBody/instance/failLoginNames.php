<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\CreateInstanceResponseBody\instance;

use AlibabaCloud\Tea\Model;

class failLoginNames extends Model
{
    /**
     * @var string[]
     */
    public $failLoginName;
    protected $_name = [
        'failLoginName' => 'FailLoginName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failLoginName) {
            $res['FailLoginName'] = $this->failLoginName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failLoginNames
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailLoginName'])) {
            if (!empty($map['FailLoginName'])) {
                $model->failLoginName = $map['FailLoginName'];
            }
        }

        return $model;
    }
}
