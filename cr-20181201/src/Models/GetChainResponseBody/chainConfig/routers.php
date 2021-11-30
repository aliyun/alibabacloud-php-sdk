<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetChainResponseBody\chainConfig;

use AlibabaCloud\SDK\Cr\V20181201\Models\GetChainResponseBody\chainConfig\routers\from;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetChainResponseBody\chainConfig\routers\to;
use AlibabaCloud\Tea\Model;

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
        'to'   => 'To',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = null !== $this->from ? $this->from->toMap() : null;
        }
        if (null !== $this->to) {
            $res['To'] = null !== $this->to ? $this->to->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routers
     */
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
