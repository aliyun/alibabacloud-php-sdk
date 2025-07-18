<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\PAL7Config;

use AlibabaCloud\SDK\Csas\V20230120\Models\PAL7ConfigRewriteOp;
use AlibabaCloud\Tea\Model;

class responseHeaderRewriteConfig extends Model
{
    /**
     * @var PAL7ConfigRewriteOp[]
     */
    public $ops;
    protected $_name = [
        'ops' => 'Ops',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ops) {
            $res['Ops'] = [];
            if (null !== $this->ops && \is_array($this->ops)) {
                $n = 0;
                foreach ($this->ops as $item) {
                    $res['Ops'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return responseHeaderRewriteConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ops'])) {
            if (!empty($map['Ops'])) {
                $model->ops = [];
                $n = 0;
                foreach ($map['Ops'] as $item) {
                    $model->ops[$n++] = null !== $item ? PAL7ConfigRewriteOp::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
