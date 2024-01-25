<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiagnoseResultRequest extends Model
{
    /**
     * @var string
     */
    public $checkId;
    protected $_name = [
        'checkId' => 'CheckId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiagnoseResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        return $model;
    }
}
