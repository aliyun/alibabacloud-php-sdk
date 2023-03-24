<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class GenerateCredentialReportResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example BBCCA90A-A1F0-4B16-B355-692247197805
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The generation status of the user credential report. Valid values:
     *
     *   STARTED: The user credential report starts to generate.
     *   INPROGRESS: The user credential report is being generated.
     *   COMPLETED: The user credential report is generated.
     *
     * @example STARTED
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
     * @return GenerateCredentialReportResponseBody
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
