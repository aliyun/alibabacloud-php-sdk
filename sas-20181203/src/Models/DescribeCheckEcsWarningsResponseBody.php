<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCheckEcsWarningsResponseBody extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $canTry;

    /**
     * @example 4E5BFDCF-B9DD-430D-9DA4-151BCB581C9D
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 3
     *
     * @var string
     */
    public $sasVersion;

    /**
     * @example 3
     *
     * @var string
     */
    public $weakPasswordCount;
    protected $_name = [
        'canTry'            => 'CanTry',
        'requestId'         => 'RequestId',
        'sasVersion'        => 'SasVersion',
        'weakPasswordCount' => 'WeakPasswordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canTry) {
            $res['CanTry'] = $this->canTry;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sasVersion) {
            $res['SasVersion'] = $this->sasVersion;
        }
        if (null !== $this->weakPasswordCount) {
            $res['WeakPasswordCount'] = $this->weakPasswordCount;
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
        if (isset($map['CanTry'])) {
            $model->canTry = $map['CanTry'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SasVersion'])) {
            $model->sasVersion = $map['SasVersion'];
        }
        if (isset($map['WeakPasswordCount'])) {
            $model->weakPasswordCount = $map['WeakPasswordCount'];
        }

        return $model;
    }
}
