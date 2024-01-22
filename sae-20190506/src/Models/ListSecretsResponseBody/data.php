<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListSecretsResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\ListSecretsResponseBody\data\secrets;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The Secrets.
     *
     * @var secrets[]
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
