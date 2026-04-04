<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAppAssistantAgentSsoLoginResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string[]
     */
    public $extra;

    /**
     * @var string
     */
    public $platformType;

    /**
     * @var string
     */
    public $ssoUrl;
    protected $_name = [
        'expireTime' => 'ExpireTime',
        'extra' => 'Extra',
        'platformType' => 'PlatformType',
        'ssoUrl' => 'SsoUrl',
    ];

    public function validate()
    {
        if (\is_array($this->extra)) {
            Model::validateArray($this->extra);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->extra) {
            if (\is_array($this->extra)) {
                $res['Extra'] = [];
                foreach ($this->extra as $key1 => $value1) {
                    $res['Extra'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->platformType) {
            $res['PlatformType'] = $this->platformType;
        }

        if (null !== $this->ssoUrl) {
            $res['SsoUrl'] = $this->ssoUrl;
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
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['Extra'])) {
            if (!empty($map['Extra'])) {
                $model->extra = [];
                foreach ($map['Extra'] as $key1 => $value1) {
                    $model->extra[$key1] = $value1;
                }
            }
        }

        if (isset($map['PlatformType'])) {
            $model->platformType = $map['PlatformType'];
        }

        if (isset($map['SsoUrl'])) {
            $model->ssoUrl = $map['SsoUrl'];
        }

        return $model;
    }
}
