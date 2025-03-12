<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetVulStatisticsResponseBody extends Model
{
    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 3FE272FA-7263-4554-A90F-A7857945A6D5
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of vulnerabilities that have the high priority.
     *
     * @example 16
     *
     * @var int
     */
    public $vulAsapSum;

    /**
     * @description The number of vulnerabilities that have the medium priority.
     *
     * @example 0
     *
     * @var int
     */
    public $vulLaterSum;

    /**
     * @description The number of vulnerabilities that have the low priority.
     *
     * @example 0
     *
     * @var int
     */
    public $vulNntfSum;
    protected $_name = [
        'requestId'   => 'RequestId',
        'vulAsapSum'  => 'VulAsapSum',
        'vulLaterSum' => 'VulLaterSum',
        'vulNntfSum'  => 'VulNntfSum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vulAsapSum) {
            $res['VulAsapSum'] = $this->vulAsapSum;
        }
        if (null !== $this->vulLaterSum) {
            $res['VulLaterSum'] = $this->vulLaterSum;
        }
        if (null !== $this->vulNntfSum) {
            $res['VulNntfSum'] = $this->vulNntfSum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVulStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VulAsapSum'])) {
            $model->vulAsapSum = $map['VulAsapSum'];
        }
        if (isset($map['VulLaterSum'])) {
            $model->vulLaterSum = $map['VulLaterSum'];
        }
        if (isset($map['VulNntfSum'])) {
            $model->vulNntfSum = $map['VulNntfSum'];
        }

        return $model;
    }
}
