<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponseBody\approvalDetail;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponseBody\approvalDetail\currentHandlers\currentHandler;
use AlibabaCloud\Tea\Model;

class currentHandlers extends Model
{
    /**
     * @var currentHandler[]
     */
    public $currentHandler;
    protected $_name = [
        'currentHandler' => 'CurrentHandler',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentHandler) {
            $res['CurrentHandler'] = [];
            if (null !== $this->currentHandler && \is_array($this->currentHandler)) {
                $n = 0;
                foreach ($this->currentHandler as $item) {
                    $res['CurrentHandler'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return currentHandlers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentHandler'])) {
            if (!empty($map['CurrentHandler'])) {
                $model->currentHandler = [];
                $n                     = 0;
                foreach ($map['CurrentHandler'] as $item) {
                    $model->currentHandler[$n++] = null !== $item ? currentHandler::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
