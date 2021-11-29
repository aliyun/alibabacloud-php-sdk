<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeEmrMainVersionResponseBody\emrMainVersion;
use AlibabaCloud\Tea\Model;

class DescribeEmrMainVersionResponseBody extends Model
{
    /**
     * @var emrMainVersion
     */
    public $emrMainVersion;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'emrMainVersion' => 'EmrMainVersion',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->emrMainVersion) {
            $res['EmrMainVersion'] = null !== $this->emrMainVersion ? $this->emrMainVersion->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEmrMainVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EmrMainVersion'])) {
            $model->emrMainVersion = emrMainVersion::fromMap($map['EmrMainVersion']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
