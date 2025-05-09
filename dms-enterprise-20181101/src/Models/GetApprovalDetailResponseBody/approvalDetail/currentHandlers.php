<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponseBody\approvalDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponseBody\approvalDetail\currentHandlers\currentHandler;

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
        if (\is_array($this->currentHandler)) {
            Model::validateArray($this->currentHandler);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentHandler) {
            if (\is_array($this->currentHandler)) {
                $res['CurrentHandler'] = [];
                $n1 = 0;
                foreach ($this->currentHandler as $item1) {
                    $res['CurrentHandler'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CurrentHandler'])) {
            if (!empty($map['CurrentHandler'])) {
                $model->currentHandler = [];
                $n1 = 0;
                foreach ($map['CurrentHandler'] as $item1) {
                    $model->currentHandler[$n1++] = currentHandler::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
