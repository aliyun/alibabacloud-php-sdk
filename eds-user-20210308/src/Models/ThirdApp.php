<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ThirdApp\oidcSsoConfig;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ThirdApp\secrets;

class ThirdApp extends Model
{
    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $name;

    /**
     * @var oidcSsoConfig
     */
    public $oidcSsoConfig;

    /**
     * @var secrets[]
     */
    public $secrets;
    protected $_name = [
        'appKey' => 'AppKey',
        'name' => 'Name',
        'oidcSsoConfig' => 'OidcSsoConfig',
        'secrets' => 'Secrets',
    ];

    public function validate()
    {
        if (null !== $this->oidcSsoConfig) {
            $this->oidcSsoConfig->validate();
        }
        if (\is_array($this->secrets)) {
            Model::validateArray($this->secrets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->oidcSsoConfig) {
            $res['OidcSsoConfig'] = null !== $this->oidcSsoConfig ? $this->oidcSsoConfig->toArray($noStream) : $this->oidcSsoConfig;
        }

        if (null !== $this->secrets) {
            if (\is_array($this->secrets)) {
                $res['Secrets'] = [];
                $n1 = 0;
                foreach ($this->secrets as $item1) {
                    $res['Secrets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OidcSsoConfig'])) {
            $model->oidcSsoConfig = oidcSsoConfig::fromMap($map['OidcSsoConfig']);
        }

        if (isset($map['Secrets'])) {
            if (!empty($map['Secrets'])) {
                $model->secrets = [];
                $n1 = 0;
                foreach ($map['Secrets'] as $item1) {
                    $model->secrets[$n1] = secrets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
