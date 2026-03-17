<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianControl\V20240816\Models\GetApiKeyResponseBody\apiKey;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BailianControl\V20240816\Models\GetApiKeyResponseBody\apiKey\authSetModel\authAppStructure;
use AlibabaCloud\SDK\BailianControl\V20240816\Models\GetApiKeyResponseBody\apiKey\authSetModel\authModelStructure;

class authSetModel extends Model
{
    /**
     * @var string[]
     */
    public $accessIps;

    /**
     * @var authAppStructure
     */
    public $authAppStructure;

    /**
     * @var authModelStructure
     */
    public $authModelStructure;

    /**
     * @var string
     */
    public $authSetMode;
    protected $_name = [
        'accessIps' => 'accessIps',
        'authAppStructure' => 'authAppStructure',
        'authModelStructure' => 'authModelStructure',
        'authSetMode' => 'authSetMode',
    ];

    public function validate()
    {
        if (\is_array($this->accessIps)) {
            Model::validateArray($this->accessIps);
        }
        if (null !== $this->authAppStructure) {
            $this->authAppStructure->validate();
        }
        if (null !== $this->authModelStructure) {
            $this->authModelStructure->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessIps) {
            if (\is_array($this->accessIps)) {
                $res['accessIps'] = [];
                $n1 = 0;
                foreach ($this->accessIps as $item1) {
                    $res['accessIps'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->authAppStructure) {
            $res['authAppStructure'] = null !== $this->authAppStructure ? $this->authAppStructure->toArray($noStream) : $this->authAppStructure;
        }

        if (null !== $this->authModelStructure) {
            $res['authModelStructure'] = null !== $this->authModelStructure ? $this->authModelStructure->toArray($noStream) : $this->authModelStructure;
        }

        if (null !== $this->authSetMode) {
            $res['authSetMode'] = $this->authSetMode;
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
        if (isset($map['accessIps'])) {
            if (!empty($map['accessIps'])) {
                $model->accessIps = [];
                $n1 = 0;
                foreach ($map['accessIps'] as $item1) {
                    $model->accessIps[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['authAppStructure'])) {
            $model->authAppStructure = authAppStructure::fromMap($map['authAppStructure']);
        }

        if (isset($map['authModelStructure'])) {
            $model->authModelStructure = authModelStructure::fromMap($map['authModelStructure']);
        }

        if (isset($map['authSetMode'])) {
            $model->authSetMode = $map['authSetMode'];
        }

        return $model;
    }
}
