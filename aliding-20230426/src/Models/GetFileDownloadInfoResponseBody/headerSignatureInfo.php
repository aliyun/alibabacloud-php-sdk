<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetFileDownloadInfoResponseBody;

use AlibabaCloud\Tea\Model;

class headerSignatureInfo extends Model
{
    /**
     * @example 900
     *
     * @var int
     */
    public $expirationSeconds;

    /**
     * @var string[]
     */
    public $headers;

    /**
     * @var string[]
     */
    public $internalResourceUrls;

    /**
     * @example ZHANGJIAKOU
     *
     * @var string
     */
    public $region;

    /**
     * @var string[]
     */
    public $resourceUrls;
    protected $_name = [
        'expirationSeconds'    => 'ExpirationSeconds',
        'headers'              => 'Headers',
        'internalResourceUrls' => 'InternalResourceUrls',
        'region'               => 'Region',
        'resourceUrls'         => 'ResourceUrls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expirationSeconds) {
            $res['ExpirationSeconds'] = $this->expirationSeconds;
        }
        if (null !== $this->headers) {
            $res['Headers'] = $this->headers;
        }
        if (null !== $this->internalResourceUrls) {
            $res['InternalResourceUrls'] = $this->internalResourceUrls;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceUrls) {
            $res['ResourceUrls'] = $this->resourceUrls;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return headerSignatureInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpirationSeconds'])) {
            $model->expirationSeconds = $map['ExpirationSeconds'];
        }
        if (isset($map['Headers'])) {
            $model->headers = $map['Headers'];
        }
        if (isset($map['InternalResourceUrls'])) {
            if (!empty($map['InternalResourceUrls'])) {
                $model->internalResourceUrls = $map['InternalResourceUrls'];
            }
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceUrls'])) {
            if (!empty($map['ResourceUrls'])) {
                $model->resourceUrls = $map['ResourceUrls'];
            }
        }

        return $model;
    }
}
