<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\AiServiceConfig;

use AlibabaCloud\Dara\Model;

class vertexServiceConfig extends Model
{
    /**
     * @var string[]
     */
    public $geminiSafetySetting;

    /**
     * @var string
     */
    public $vertexAuthKey;

    /**
     * @var string
     */
    public $vertexAuthServiceName;

    /**
     * @var string
     */
    public $vertexProjectId;

    /**
     * @var string
     */
    public $vertexRegion;

    /**
     * @var int
     */
    public $vertexTokenRefreshAhead;
    protected $_name = [
        'geminiSafetySetting' => 'geminiSafetySetting',
        'vertexAuthKey' => 'vertexAuthKey',
        'vertexAuthServiceName' => 'vertexAuthServiceName',
        'vertexProjectId' => 'vertexProjectId',
        'vertexRegion' => 'vertexRegion',
        'vertexTokenRefreshAhead' => 'vertexTokenRefreshAhead',
    ];

    public function validate()
    {
        if (\is_array($this->geminiSafetySetting)) {
            Model::validateArray($this->geminiSafetySetting);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->geminiSafetySetting) {
            if (\is_array($this->geminiSafetySetting)) {
                $res['geminiSafetySetting'] = [];
                foreach ($this->geminiSafetySetting as $key1 => $value1) {
                    $res['geminiSafetySetting'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->vertexAuthKey) {
            $res['vertexAuthKey'] = $this->vertexAuthKey;
        }

        if (null !== $this->vertexAuthServiceName) {
            $res['vertexAuthServiceName'] = $this->vertexAuthServiceName;
        }

        if (null !== $this->vertexProjectId) {
            $res['vertexProjectId'] = $this->vertexProjectId;
        }

        if (null !== $this->vertexRegion) {
            $res['vertexRegion'] = $this->vertexRegion;
        }

        if (null !== $this->vertexTokenRefreshAhead) {
            $res['vertexTokenRefreshAhead'] = $this->vertexTokenRefreshAhead;
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
        if (isset($map['geminiSafetySetting'])) {
            if (!empty($map['geminiSafetySetting'])) {
                $model->geminiSafetySetting = [];
                foreach ($map['geminiSafetySetting'] as $key1 => $value1) {
                    $model->geminiSafetySetting[$key1] = $value1;
                }
            }
        }

        if (isset($map['vertexAuthKey'])) {
            $model->vertexAuthKey = $map['vertexAuthKey'];
        }

        if (isset($map['vertexAuthServiceName'])) {
            $model->vertexAuthServiceName = $map['vertexAuthServiceName'];
        }

        if (isset($map['vertexProjectId'])) {
            $model->vertexProjectId = $map['vertexProjectId'];
        }

        if (isset($map['vertexRegion'])) {
            $model->vertexRegion = $map['vertexRegion'];
        }

        if (isset($map['vertexTokenRefreshAhead'])) {
            $model->vertexTokenRefreshAhead = $map['vertexTokenRefreshAhead'];
        }

        return $model;
    }
}
