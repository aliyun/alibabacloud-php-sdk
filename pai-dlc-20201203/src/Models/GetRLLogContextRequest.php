<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class GetRLLogContextRequest extends Model
{
    /**
     * @var string
     */
    public $anchorMessage;

    /**
     * @var string
     */
    public $anchorTime;

    /**
     * @var string
     */
    public $collectTime;
    protected $_name = [
        'anchorMessage' => 'AnchorMessage',
        'anchorTime' => 'AnchorTime',
        'collectTime' => 'CollectTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anchorMessage) {
            $res['AnchorMessage'] = $this->anchorMessage;
        }

        if (null !== $this->anchorTime) {
            $res['AnchorTime'] = $this->anchorTime;
        }

        if (null !== $this->collectTime) {
            $res['CollectTime'] = $this->collectTime;
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
        if (isset($map['AnchorMessage'])) {
            $model->anchorMessage = $map['AnchorMessage'];
        }

        if (isset($map['AnchorTime'])) {
            $model->anchorTime = $map['AnchorTime'];
        }

        if (isset($map['CollectTime'])) {
            $model->collectTime = $map['CollectTime'];
        }

        return $model;
    }
}
