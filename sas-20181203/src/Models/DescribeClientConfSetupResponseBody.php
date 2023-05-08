<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClientConfSetupResponseBody\clientConf;
use AlibabaCloud\Tea\Model;

class DescribeClientConfSetupResponseBody extends Model
{
    /**
     * @description The configurations of the Security Center agent.
     *
     * @var clientConf
     */
    public $clientConf;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 151F6EB6-D5F3-417A-AF7B-4D84975D****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clientConf' => 'ClientConf',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientConf) {
            $res['ClientConf'] = null !== $this->clientConf ? $this->clientConf->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClientConfSetupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientConf'])) {
            $model->clientConf = clientConf::fromMap($map['ClientConf']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
