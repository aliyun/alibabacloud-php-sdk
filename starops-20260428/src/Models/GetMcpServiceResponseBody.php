<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\STAROps\V20260428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\STAROps\V20260428\Models\GetMcpServiceResponseBody\mcpService;

class GetMcpServiceResponseBody extends Model
{
    /**
     * @var mcpService
     */
    public $mcpService;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mcpService' => 'mcpService',
        'regionId' => 'regionId',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->mcpService) {
            $this->mcpService->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mcpService) {
            $res['mcpService'] = null !== $this->mcpService ? $this->mcpService->toArray($noStream) : $this->mcpService;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['mcpService'])) {
            $model->mcpService = mcpService::fromMap($map['mcpService']);
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
