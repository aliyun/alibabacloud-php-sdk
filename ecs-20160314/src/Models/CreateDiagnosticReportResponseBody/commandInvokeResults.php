<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\CreateDiagnosticReportResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateDiagnosticReportResponseBody\commandInvokeResults\invokeResult;
use AlibabaCloud\Tea\Model;

class commandInvokeResults extends Model
{
    /**
     * @var invokeResult[]
     */
    public $invokeResult;
    protected $_name = [
        'invokeResult' => 'InvokeResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invokeResult) {
            $res['InvokeResult'] = [];
            if (null !== $this->invokeResult && \is_array($this->invokeResult)) {
                $n = 0;
                foreach ($this->invokeResult as $item) {
                    $res['InvokeResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commandInvokeResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvokeResult'])) {
            if (!empty($map['InvokeResult'])) {
                $model->invokeResult = [];
                $n                   = 0;
                foreach ($map['InvokeResult'] as $item) {
                    $model->invokeResult[$n++] = null !== $item ? invokeResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
