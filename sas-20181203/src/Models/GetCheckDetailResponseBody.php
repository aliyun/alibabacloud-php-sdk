<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody\assistInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody\description;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody\solution;
use AlibabaCloud\Tea\Model;

class GetCheckDetailResponseBody extends Model
{
    /**
     * @description The help information about the check item.
     *
     * @var assistInfo
     */
    public $assistInfo;

    /**
     * @description The description of the check item.
     *
     * @var description
     */
    public $description;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 15A6ED6A-DBFE-5255-A248-289907809BEC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The solution to handle the risk item.
     *
     * @var solution
     */
    public $solution;
    protected $_name = [
        'assistInfo'  => 'AssistInfo',
        'description' => 'Description',
        'requestId'   => 'RequestId',
        'solution'    => 'Solution',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assistInfo) {
            $res['AssistInfo'] = null !== $this->assistInfo ? $this->assistInfo->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = null !== $this->description ? $this->description->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->solution) {
            $res['Solution'] = null !== $this->solution ? $this->solution->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCheckDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssistInfo'])) {
            $model->assistInfo = assistInfo::fromMap($map['AssistInfo']);
        }
        if (isset($map['Description'])) {
            $model->description = description::fromMap($map['Description']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Solution'])) {
            $model->solution = solution::fromMap($map['Solution']);
        }

        return $model;
    }
}
