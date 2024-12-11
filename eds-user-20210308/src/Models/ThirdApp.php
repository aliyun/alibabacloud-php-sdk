<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\ThirdApp\oidcSsoConfig;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ThirdApp\secrets;
use AlibabaCloud\Tea\Model;

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
        'appKey'        => 'AppKey',
        'name'          => 'Name',
        'oidcSsoConfig' => 'OidcSsoConfig',
        'secrets'       => 'Secrets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->oidcSsoConfig) {
            $res['OidcSsoConfig'] = null !== $this->oidcSsoConfig ? $this->oidcSsoConfig->toMap() : null;
        }
        if (null !== $this->secrets) {
            $res['Secrets'] = [];
            if (null !== $this->secrets && \is_array($this->secrets)) {
                $n = 0;
                foreach ($this->secrets as $item) {
                    $res['Secrets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ThirdApp
     */
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
                $n              = 0;
                foreach ($map['Secrets'] as $item) {
                    $model->secrets[$n++] = null !== $item ? secrets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
