<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetDataServiceApiTestRequest extends Model
{
    /**
     * @description The ID of the test. You can obtain the test ID from the response of the asynchronous operation TestDataServiceApi. You can also call the ListDataServiceApiTest operation to obtain the ID of the latest test.
     *
     * @example 123434
     *
     * @var int
     */
    public $testId;
    protected $_name = [
        'testId' => 'TestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->testId) {
            $res['TestId'] = $this->testId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataServiceApiTestRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TestId'])) {
            $model->testId = $map['TestId'];
        }

        return $model;
    }
}
