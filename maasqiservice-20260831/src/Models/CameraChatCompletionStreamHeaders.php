<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasQIService\V20260831\Models;

use AlibabaCloud\Dara\Model;

class CameraChatCompletionStreamHeaders extends Model
{
    /**
     * @var string[]
     */
    public $commonHeaders;

    /**
     * @var string
     */
    public $xQIAgentApiKey;

    /**
     * @var string
     */
    public $xQIRequestId;

    /**
     * @var string
     */
    public $xQISessionId;

    /**
     * @var string
     */
    public $xQIInstanceId;
    protected $_name = [
        'commonHeaders' => 'commonHeaders',
        'xQIAgentApiKey' => 'X-QI-Agent-Api-Key',
        'xQIRequestId' => 'X-QI-Request-Id',
        'xQISessionId' => 'X-QI-Session-Id',
        'xQIInstanceId' => 'x-QI-Instance-Id',
    ];

    public function validate()
    {
        if (\is_array($this->commonHeaders)) {
            Model::validateArray($this->commonHeaders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            if (\is_array($this->commonHeaders)) {
                $res['commonHeaders'] = [];
                foreach ($this->commonHeaders as $key1 => $value1) {
                    $res['commonHeaders'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->xQIAgentApiKey) {
            $res['X-QI-Agent-Api-Key'] = $this->xQIAgentApiKey;
        }

        if (null !== $this->xQIRequestId) {
            $res['X-QI-Request-Id'] = $this->xQIRequestId;
        }

        if (null !== $this->xQISessionId) {
            $res['X-QI-Session-Id'] = $this->xQISessionId;
        }

        if (null !== $this->xQIInstanceId) {
            $res['x-QI-Instance-Id'] = $this->xQIInstanceId;
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
        if (isset($map['commonHeaders'])) {
            if (!empty($map['commonHeaders'])) {
                $model->commonHeaders = [];
                foreach ($map['commonHeaders'] as $key1 => $value1) {
                    $model->commonHeaders[$key1] = $value1;
                }
            }
        }

        if (isset($map['X-QI-Agent-Api-Key'])) {
            $model->xQIAgentApiKey = $map['X-QI-Agent-Api-Key'];
        }

        if (isset($map['X-QI-Request-Id'])) {
            $model->xQIRequestId = $map['X-QI-Request-Id'];
        }

        if (isset($map['X-QI-Session-Id'])) {
            $model->xQISessionId = $map['X-QI-Session-Id'];
        }

        if (isset($map['x-QI-Instance-Id'])) {
            $model->xQIInstanceId = $map['x-QI-Instance-Id'];
        }

        return $model;
    }
}
