<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\dtsJobList;

use AlibabaCloud\Tea\Model;

class errorDetails extends Model
{
    /**
     * @description The error code returned.
     *
     * @example DTS-31009
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The URL of the documentation.
     *
     * @example https://**.ali**.com/**
     *
     * @var string
     */
    public $helpUrl;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'helpUrl'   => 'HelpUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->helpUrl) {
            $res['HelpUrl'] = $this->helpUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['HelpUrl'])) {
            $model->helpUrl = $map['HelpUrl'];
        }

        return $model;
    }
}
