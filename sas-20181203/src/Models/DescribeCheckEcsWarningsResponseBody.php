<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCheckEcsWarningsResponseBody extends Model
{
    /**
     * @var string
     */
    public $sasVersion;

    /**
     * @var string
     */
    public $canTry;

    /**
     * @var string
     */
    public $weakPasswordCount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'sasVersion'        => 'SasVersion',
        'canTry'            => 'CanTry',
        'weakPasswordCount' => 'WeakPasswordCount',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sasVersion) {
            $res['SasVersion'] = $this->sasVersion;
        }
        if (null !== $this->canTry) {
            $res['CanTry'] = $this->canTry;
        }
        if (null !== $this->weakPasswordCount) {
            $res['WeakPasswordCount'] = $this->weakPasswordCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCheckEcsWarningsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SasVersion'])) {
            $model->sasVersion = $map['SasVersion'];
        }
        if (isset($map['CanTry'])) {
            $model->canTry = $map['CanTry'];
        }
        if (isset($map['WeakPasswordCount'])) {
            $model->weakPasswordCount = $map['WeakPasswordCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
