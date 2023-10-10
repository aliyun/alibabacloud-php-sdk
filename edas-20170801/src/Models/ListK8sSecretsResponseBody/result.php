<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sSecretsResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sSecretsResponseBody\result\secrets;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The information about Kubernetes Secrets.
     *
     * @var secrets[]
     */
    public $secrets;

    /**
     * @description The total number of entries that are returned.
     *
     * @example 6
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'secrets' => 'Secrets',
        'total'   => 'Total',
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
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
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
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
