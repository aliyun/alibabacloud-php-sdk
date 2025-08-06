<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultipartFileUploadInfosResponseBody\multipartHeaderSignatureInfos;

use AlibabaCloud\Dara\Model;

class headerSignatureInfo extends Model
{
    /**
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
     * @var string
     */
    public $region;

    /**
     * @var string[]
     */
    public $resourceUrls;
    protected $_name = [
        'expirationSeconds' => 'ExpirationSeconds',
        'headers' => 'Headers',
        'internalResourceUrls' => 'InternalResourceUrls',
        'region' => 'Region',
        'resourceUrls' => 'ResourceUrls',
    ];

    public function validate()
    {
        if (\is_array($this->headers)) {
            Model::validateArray($this->headers);
        }
        if (\is_array($this->internalResourceUrls)) {
            Model::validateArray($this->internalResourceUrls);
        }
        if (\is_array($this->resourceUrls)) {
            Model::validateArray($this->resourceUrls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expirationSeconds) {
            $res['ExpirationSeconds'] = $this->expirationSeconds;
        }

        if (null !== $this->headers) {
            if (\is_array($this->headers)) {
                $res['Headers'] = [];
                foreach ($this->headers as $key1 => $value1) {
                    $res['Headers'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->internalResourceUrls) {
            if (\is_array($this->internalResourceUrls)) {
                $res['InternalResourceUrls'] = [];
                $n1 = 0;
                foreach ($this->internalResourceUrls as $item1) {
                    $res['InternalResourceUrls'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->resourceUrls) {
            if (\is_array($this->resourceUrls)) {
                $res['ResourceUrls'] = [];
                $n1 = 0;
                foreach ($this->resourceUrls as $item1) {
                    $res['ResourceUrls'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ExpirationSeconds'])) {
            $model->expirationSeconds = $map['ExpirationSeconds'];
        }

        if (isset($map['Headers'])) {
            if (!empty($map['Headers'])) {
                $model->headers = [];
                foreach ($map['Headers'] as $key1 => $value1) {
                    $model->headers[$key1] = $value1;
                }
            }
        }

        if (isset($map['InternalResourceUrls'])) {
            if (!empty($map['InternalResourceUrls'])) {
                $model->internalResourceUrls = [];
                $n1 = 0;
                foreach ($map['InternalResourceUrls'] as $item1) {
                    $model->internalResourceUrls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['ResourceUrls'])) {
            if (!empty($map['ResourceUrls'])) {
                $model->resourceUrls = [];
                $n1 = 0;
                foreach ($map['ResourceUrls'] as $item1) {
                    $model->resourceUrls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
