<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateADConnectorDirectoryResponseBody\adConnectors;
use AlibabaCloud\Tea\Model;

class CreateADConnectorDirectoryResponseBody extends Model
{
    /**
     * @description The details of AD connectors.
     *
     * @var adConnectors[]
     */
    public $adConnectors;

    /**
     * @description The ID of the AD directory.
     *
     * @example cn-hangzhou+dir-gx2x1dhsmu52rd****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The ID of the request.
     *
     * @example 3FE99D5E-93A1-493F-B1CB-0ABD4D05BEFF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The AD trust password.
     *
     * @example 82Tg****
     *
     * @var string
     */
    public $trustPassword;
    protected $_name = [
        'adConnectors'  => 'AdConnectors',
        'directoryId'   => 'DirectoryId',
        'requestId'     => 'RequestId',
        'trustPassword' => 'TrustPassword',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adConnectors) {
            $res['AdConnectors'] = [];
            if (null !== $this->adConnectors && \is_array($this->adConnectors)) {
                $n = 0;
                foreach ($this->adConnectors as $item) {
                    $res['AdConnectors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->trustPassword) {
            $res['TrustPassword'] = $this->trustPassword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateADConnectorDirectoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdConnectors'])) {
            if (!empty($map['AdConnectors'])) {
                $model->adConnectors = [];
                $n                   = 0;
                foreach ($map['AdConnectors'] as $item) {
                    $model->adConnectors[$n++] = null !== $item ? adConnectors::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TrustPassword'])) {
            $model->trustPassword = $map['TrustPassword'];
        }

        return $model;
    }
}
