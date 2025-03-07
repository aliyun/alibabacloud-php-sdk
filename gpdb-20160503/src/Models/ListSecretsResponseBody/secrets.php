<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListSecretsResponseBody;

use AlibabaCloud\Tea\Model;

class secrets extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Gpdb\V20160503\Models\ListSecretsResponseBody\secrets\secrets[]
     */
    public $secrets;
    protected $_name = [
        'secrets' => 'Secrets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return secrets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Secrets'])) {
            if (!empty($map['Secrets'])) {
                $model->secrets = [];
                $n              = 0;
                foreach ($map['Secrets'] as $item) {
                    $model->secrets[$n++] = null !== $item ? \AlibabaCloud\SDK\Gpdb\V20160503\Models\ListSecretsResponseBody\secrets\secrets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
