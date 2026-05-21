<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateApplicationVersionRequest\toolConfig;

use AlibabaCloud\Dara\Model;

class mcpServers extends Model
{
    /**
     * @var string
     */
    public $baseUrl;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sseEndpoint;
    protected $_name = [
        'baseUrl' => 'BaseUrl',
        'name' => 'Name',
        'sseEndpoint' => 'SseEndpoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseUrl) {
            $res['BaseUrl'] = $this->baseUrl;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->sseEndpoint) {
            $res['SseEndpoint'] = $this->sseEndpoint;
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
        if (isset($map['BaseUrl'])) {
            $model->baseUrl = $map['BaseUrl'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SseEndpoint'])) {
            $model->sseEndpoint = $map['SseEndpoint'];
        }

        return $model;
    }
}
