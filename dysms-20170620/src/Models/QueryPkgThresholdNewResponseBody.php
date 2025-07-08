<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;

class QueryPkgThresholdNewResponseBody extends Model
{
    /**
     * @var int
     */
    public $packageWarningLimit;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'packageWarningLimit' => 'PackageWarningLimit',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->packageWarningLimit) {
            $res['PackageWarningLimit'] = $this->packageWarningLimit;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['PackageWarningLimit'])) {
            $model->packageWarningLimit = $map['PackageWarningLimit'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
