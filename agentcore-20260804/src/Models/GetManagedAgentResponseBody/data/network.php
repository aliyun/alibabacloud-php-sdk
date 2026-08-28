<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentResponseBody\data\network\accessInternet;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentResponseBody\data\network\accessVpc;

class network extends Model
{
    /**
     * @var accessInternet
     */
    public $accessInternet;

    /**
     * @var accessVpc
     */
    public $accessVpc;
    protected $_name = [
        'accessInternet' => 'accessInternet',
        'accessVpc' => 'accessVpc',
    ];

    public function validate()
    {
        if (null !== $this->accessInternet) {
            $this->accessInternet->validate();
        }
        if (null !== $this->accessVpc) {
            $this->accessVpc->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessInternet) {
            $res['accessInternet'] = null !== $this->accessInternet ? $this->accessInternet->toArray($noStream) : $this->accessInternet;
        }

        if (null !== $this->accessVpc) {
            $res['accessVpc'] = null !== $this->accessVpc ? $this->accessVpc->toArray($noStream) : $this->accessVpc;
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
        if (isset($map['accessInternet'])) {
            $model->accessInternet = accessInternet::fromMap($map['accessInternet']);
        }

        if (isset($map['accessVpc'])) {
            $model->accessVpc = accessVpc::fromMap($map['accessVpc']);
        }

        return $model;
    }
}
