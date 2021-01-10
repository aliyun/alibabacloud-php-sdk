<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBatchRegistAnonymousTbAccountResultResponseBody;

use AlibabaCloud\Tea\Model;

class failIds extends Model
{
    /**
     * @var string[]
     */
    public $failId;
    protected $_name = [
        'failId' => 'FailId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failId) {
            $res['FailId'] = $this->failId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailId'])) {
            if (!empty($map['FailId'])) {
                $model->failId = $map['FailId'];
            }
        }

        return $model;
    }
}
