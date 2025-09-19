<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeCheckEcsWarningsResponseBody extends Model
{
    /**
     * @var string
     */
    public $canTry;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sasVersion;

    /**
     * @var string
     */
    public $weakPasswordCount;
    protected $_name = [
        'canTry' => 'CanTry',
        'requestId' => 'RequestId',
        'sasVersion' => 'SasVersion',
        'weakPasswordCount' => 'WeakPasswordCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
