<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSmartContractResultContentResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSmartContractResultContentResponseBody\result\diagnostics;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var diagnostics[]
     */
    public $diagnostics;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'diagnostics' => 'Diagnostics',
        'uri'         => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diagnostics) {
            $res['Diagnostics'] = [];
            if (null !== $this->diagnostics && \is_array($this->diagnostics)) {
                $n = 0;
                foreach ($this->diagnostics as $item) {
                    $res['Diagnostics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
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
        if (isset($map['Diagnostics'])) {
            if (!empty($map['Diagnostics'])) {
                $model->diagnostics = [];
                $n                  = 0;
                foreach ($map['Diagnostics'] as $item) {
                    $model->diagnostics[$n++] = null !== $item ? diagnostics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
