<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListPredefinedModelProvidersResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $defaultEndpoint;

    /**
     * @var string
     */
    public $defaultProtocol;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $providerType;
    protected $_name = [
        'defaultEndpoint' => 'defaultEndpoint',
        'defaultProtocol' => 'defaultProtocol',
        'displayName' => 'displayName',
        'providerType' => 'providerType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultEndpoint) {
            $res['defaultEndpoint'] = $this->defaultEndpoint;
        }

        if (null !== $this->defaultProtocol) {
            $res['defaultProtocol'] = $this->defaultProtocol;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->providerType) {
            $res['providerType'] = $this->providerType;
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
        if (isset($map['defaultEndpoint'])) {
            $model->defaultEndpoint = $map['defaultEndpoint'];
        }

        if (isset($map['defaultProtocol'])) {
            $model->defaultProtocol = $map['defaultProtocol'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['providerType'])) {
            $model->providerType = $map['providerType'];
        }

        return $model;
    }
}
