<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetOwnRequestLogResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetOwnRequestLogResponseBody\logInfo\authenticationInfo;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetOwnRequestLogResponseBody\logInfo\basicInfo;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetOwnRequestLogResponseBody\logInfo\callerInfo;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetOwnRequestLogResponseBody\logInfo\parameters;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetOwnRequestLogResponseBody\logInfo\responses;

class logInfo extends Model
{
    /**
     * @var authenticationInfo
     */
    public $authenticationInfo;
    /**
     * @var basicInfo
     */
    public $basicInfo;
    /**
     * @var callerInfo
     */
    public $callerInfo;
    /**
     * @var parameters[]
     */
    public $parameters;
    /**
     * @var responses
     */
    public $responses;
    protected $_name = [
        'authenticationInfo' => 'authenticationInfo',
        'basicInfo'          => 'basicInfo',
        'callerInfo'         => 'callerInfo',
        'parameters'         => 'parameters',
        'responses'          => 'responses',
    ];

    public function validate()
    {
        if (null !== $this->authenticationInfo) {
            $this->authenticationInfo->validate();
        }
        if (null !== $this->basicInfo) {
            $this->basicInfo->validate();
        }
        if (null !== $this->callerInfo) {
            $this->callerInfo->validate();
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (null !== $this->responses) {
            $this->responses->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authenticationInfo) {
            $res['authenticationInfo'] = null !== $this->authenticationInfo ? $this->authenticationInfo->toArray($noStream) : $this->authenticationInfo;
        }

        if (null !== $this->basicInfo) {
            $res['basicInfo'] = null !== $this->basicInfo ? $this->basicInfo->toArray($noStream) : $this->basicInfo;
        }

        if (null !== $this->callerInfo) {
            $res['callerInfo'] = null !== $this->callerInfo ? $this->callerInfo->toArray($noStream) : $this->callerInfo;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['parameters'] = [];
                $n1                = 0;
                foreach ($this->parameters as $item1) {
                    $res['parameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->responses) {
            $res['responses'] = null !== $this->responses ? $this->responses->toArray($noStream) : $this->responses;
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
        if (isset($map['authenticationInfo'])) {
            $model->authenticationInfo = authenticationInfo::fromMap($map['authenticationInfo']);
        }

        if (isset($map['basicInfo'])) {
            $model->basicInfo = basicInfo::fromMap($map['basicInfo']);
        }

        if (isset($map['callerInfo'])) {
            $model->callerInfo = callerInfo::fromMap($map['callerInfo']);
        }

        if (isset($map['parameters'])) {
            if (!empty($map['parameters'])) {
                $model->parameters = [];
                $n1                = 0;
                foreach ($map['parameters'] as $item1) {
                    $model->parameters[$n1++] = parameters::fromMap($item1);
                }
            }
        }

        if (isset($map['responses'])) {
            $model->responses = responses::fromMap($map['responses']);
        }

        return $model;
    }
}
