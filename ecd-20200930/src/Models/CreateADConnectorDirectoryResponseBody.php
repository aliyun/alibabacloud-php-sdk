<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateADConnectorDirectoryResponseBody\adConnectors;

class CreateADConnectorDirectoryResponseBody extends Model
{
    /**
     * @var adConnectors[]
     */
    public $adConnectors;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $trustPassword;
    protected $_name = [
        'adConnectors' => 'AdConnectors',
        'directoryId' => 'DirectoryId',
        'requestId' => 'RequestId',
        'trustPassword' => 'TrustPassword',
    ];

    public function validate()
    {
        if (\is_array($this->adConnectors)) {
            Model::validateArray($this->adConnectors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adConnectors) {
            if (\is_array($this->adConnectors)) {
                $res['AdConnectors'] = [];
                $n1 = 0;
                foreach ($this->adConnectors as $item1) {
                    $res['AdConnectors'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdConnectors'])) {
            if (!empty($map['AdConnectors'])) {
                $model->adConnectors = [];
                $n1 = 0;
                foreach ($map['AdConnectors'] as $item1) {
                    $model->adConnectors[$n1] = adConnectors::fromMap($item1);
                    ++$n1;
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
