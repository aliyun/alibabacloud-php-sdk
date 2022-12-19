<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCheckEcsWarningsResponseBody extends Model
{
    /**
     * @description Indicates whether you use the free trial of Security Center. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 0
     *
     * @var string
     */
    public $canTry;

    /**
     * @description The ID of the request.
     *
     * @example 4E5BFDCF-B9DD-430D-9DA4-151BCB581C9D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The edition of Security Center that you use. Valid values:
     *
     *   **1**: Basic edition
     *   **2** or **3**: Enterprise edition
     *   **5**: Advanced edition
     *   **6**: Anti-virus edition
     *
     * >  Both the value 2 and the value 3 indicate the Enterprise edition.
     * @example 3
     *
     * @var string
     */
    public $sasVersion;

    /**
     * @description The number of weak passwords that can cause high risks to your assets.
     *
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
