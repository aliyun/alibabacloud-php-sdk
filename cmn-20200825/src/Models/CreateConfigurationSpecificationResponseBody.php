<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class CreateConfigurationSpecificationResponseBody extends Model
{
    /**
     * @example adaieaoweif_s3834
     *
     * @var string
     */
    public $configurationSpecificationId;

    /**
     * @example requestId
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configurationSpecificationId' => 'ConfigurationSpecificationId',
        'requestId'                    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configurationSpecificationId) {
            $res['ConfigurationSpecificationId'] = $this->configurationSpecificationId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConfigurationSpecificationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigurationSpecificationId'])) {
            $model->configurationSpecificationId = $map['ConfigurationSpecificationId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
