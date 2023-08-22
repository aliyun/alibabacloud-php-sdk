<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagManifestResponseBody\manifest;
use AlibabaCloud\Tea\Model;

class GetRepoTagManifestResponseBody extends Model
{
    /**
     * @description The return value.
     *
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description The information about the image manifest.
     *
     * @var manifest
     */
    public $manifest;

    /**
     * @description The ID of the request.
     *
     * @example D39D7151-0299-47E3-B948-E49E1EA8D406
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'isSuccess' => 'IsSuccess',
        'manifest'  => 'Manifest',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->manifest) {
            $res['Manifest'] = null !== $this->manifest ? $this->manifest->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRepoTagManifestResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['Manifest'])) {
            $model->manifest = manifest::fromMap($map['Manifest']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
