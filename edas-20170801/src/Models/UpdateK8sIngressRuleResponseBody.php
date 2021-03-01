<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateK8sIngressRuleResponseBody\changeOrderIds;
use AlibabaCloud\Tea\Model;

class UpdateK8sIngressRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var changeOrderIds[]
     */
    public $changeOrderIds;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'message'        => 'Message',
        'changeOrderIds' => 'ChangeOrderIds',
        'code'           => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->changeOrderIds) {
            $res['ChangeOrderIds'] = [];
            if (null !== $this->changeOrderIds && \is_array($this->changeOrderIds)) {
                $n = 0;
                foreach ($this->changeOrderIds as $item) {
                    $res['ChangeOrderIds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateK8sIngressRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ChangeOrderIds'])) {
            if (!empty($map['ChangeOrderIds'])) {
                $model->changeOrderIds = [];
                $n                     = 0;
                foreach ($map['ChangeOrderIds'] as $item) {
                    $model->changeOrderIds[$n++] = null !== $item ? changeOrderIds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
