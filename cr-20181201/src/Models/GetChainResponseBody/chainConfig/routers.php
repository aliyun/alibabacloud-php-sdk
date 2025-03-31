<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetChainResponseBody\chainConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetChainResponseBody\chainConfig\routers\from;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetChainResponseBody\chainConfig\routers\to;

class routers extends Model
{
    /**
     * @var from
     */
    public $from;

    /**
     * @var to
     */
    public $to;
    protected $_name = [
        'from' => 'From',
        'to' => 'To',
    ];

    public function validate()
    {
        if (null !== $this->from) {
            $this->from->validate();
        }
        if (null !== $this->to) {
            $this->to->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = null !== $this->from ? $this->from->toArray($noStream) : $this->from;
        }

        if (null !== $this->to) {
            $res['To'] = null !== $this->to ? $this->to->toArray($noStream) : $this->to;
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
        if (isset($map['From'])) {
            $model->from = from::fromMap($map['From']);
        }

        if (isset($map['To'])) {
            $model->to = to::fromMap($map['To']);
        }

        return $model;
    }
}
