<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\ForwardInfoResponse;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\ForwardInfoResponse\connectInfo\internet;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ForwardInfoResponse\connectInfo\intranet;
use AlibabaCloud\Tea\Model;

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
     * @example DNAT and privateZone are both ready.
     *
     * @var string
     */
    public $message;

    /**
     * @example Ready
     *
     * @var string
     */
    public $phase;
    protected $_name = [
        'internet' => 'Internet',
        'intranet' => 'Intranet',
        'message'  => 'Message',
        'phase'    => 'Phase',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->internet) {
            $res['Internet'] = null !== $this->internet ? $this->internet->toMap() : null;
        }
        if (null !== $this->intranet) {
            $res['Intranet'] = null !== $this->intranet ? $this->intranet->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connectInfo
     */
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
