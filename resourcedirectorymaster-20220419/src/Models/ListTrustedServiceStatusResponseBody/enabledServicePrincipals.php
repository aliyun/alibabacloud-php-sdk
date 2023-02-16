<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListTrustedServiceStatusResponseBody;

use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListTrustedServiceStatusResponseBody\enabledServicePrincipals\enabledServicePrincipal;
use AlibabaCloud\Tea\Model;

class enabledServicePrincipals extends Model
{
    /**
     * @var enabledServicePrincipal[]
     */
    public $enabledServicePrincipal;
    protected $_name = [
        'enabledServicePrincipal' => 'EnabledServicePrincipal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabledServicePrincipal) {
            $res['EnabledServicePrincipal'] = [];
            if (null !== $this->enabledServicePrincipal && \is_array($this->enabledServicePrincipal)) {
                $n = 0;
                foreach ($this->enabledServicePrincipal as $item) {
                    $res['EnabledServicePrincipal'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return enabledServicePrincipals
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnabledServicePrincipal'])) {
            if (!empty($map['EnabledServicePrincipal'])) {
                $model->enabledServicePrincipal = [];
                $n                              = 0;
                foreach ($map['EnabledServicePrincipal'] as $item) {
                    $model->enabledServicePrincipal[$n++] = null !== $item ? enabledServicePrincipal::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
