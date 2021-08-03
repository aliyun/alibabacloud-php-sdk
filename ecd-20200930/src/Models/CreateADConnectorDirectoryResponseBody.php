<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateADConnectorDirectoryResponseBody\adConnectors;
use AlibabaCloud\Tea\Model;

class CreateADConnectorDirectoryResponseBody extends Model
{
    /**
     * @var string
     */
    public $trustPassword;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var adConnectors[]
     */
    public $adConnectors;
    protected $_name = [
        'trustPassword' => 'TrustPassword',
        'requestId'     => 'RequestId',
        'directoryId'   => 'DirectoryId',
        'adConnectors'  => 'AdConnectors',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trustPassword) {
            $res['TrustPassword'] = $this->trustPassword;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->adConnectors) {
            $res['AdConnectors'] = [];
            if (null !== $this->adConnectors && \is_array($this->adConnectors)) {
                $n = 0;
                foreach ($this->adConnectors as $item) {
                    $res['AdConnectors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['TrustPassword'])) {
            $model->trustPassword = $map['TrustPassword'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['AdConnectors'])) {
            if (!empty($map['AdConnectors'])) {
                $model->adConnectors = [];
                $n                   = 0;
                foreach ($map['AdConnectors'] as $item) {
                    $model->adConnectors[$n++] = null !== $item ? adConnectors::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
