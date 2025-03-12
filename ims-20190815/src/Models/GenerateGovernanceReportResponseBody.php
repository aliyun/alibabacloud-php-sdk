<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class GenerateGovernanceReportResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 492E130C-76D3-55D5-BE5C-C023E431369A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The report generation status. Valid values:
     *
     *   Started: The system starts to generate a governance report.
     *   Progressing: The system is generating a governance report.
     *   Completed: A governance report is generated.
     *
     * @example Started
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'requestId' => 'RequestId',
        'state'     => 'State',
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
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateGovernanceReportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
