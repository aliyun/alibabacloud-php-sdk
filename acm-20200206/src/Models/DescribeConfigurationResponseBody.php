<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acm\V20200206\Models;

use AlibabaCloud\SDK\Acm\V20200206\Models\DescribeConfigurationResponseBody\configuration;
use AlibabaCloud\Tea\Model;

class DescribeConfigurationResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var configuration
     */
    public $configuration;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'message'       => 'Message',
        'requestId'     => 'RequestId',
        'configuration' => 'Configuration',
        'code'          => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->configuration) {
            $res['Configuration'] = null !== $this->configuration ? $this->configuration->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConfigurationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Configuration'])) {
            $model->configuration = configuration::fromMap($map['Configuration']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
