<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\ForwardInfoResponse;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ForwardInfoResponse\connectInfo\internet;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ForwardInfoResponse\connectInfo\intranet;

class connectInfo extends Model
{
    /**
     * @var internet
     */
    public $internet;

    /**
     * @var intranet
     */
    public $intranet;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $phase;
    protected $_name = [
        'internet' => 'Internet',
        'intranet' => 'Intranet',
        'message' => 'Message',
        'phase' => 'Phase',
    ];

    public function validate()
    {
        if (null !== $this->internet) {
            $this->internet->validate();
        }
        if (null !== $this->intranet) {
            $this->intranet->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->internet) {
            $res['Internet'] = null !== $this->internet ? $this->internet->toArray($noStream) : $this->internet;
        }

        if (null !== $this->intranet) {
            $res['Intranet'] = null !== $this->intranet ? $this->intranet->toArray($noStream) : $this->intranet;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
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
        if (isset($map['Internet'])) {
            $model->internet = internet::fromMap($map['Internet']);
        }

        if (isset($map['Intranet'])) {
            $model->intranet = intranet::fromMap($map['Intranet']);
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }

        return $model;
    }
}
