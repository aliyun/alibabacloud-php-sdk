<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Beian\V20160810\Models\ListUnbeianIpCheckTypeResponseBody;

use AlibabaCloud\SDK\Beian\V20160810\Models\ListUnbeianIpCheckTypeResponseBody\huntressIpCheckTypeResultDO\list_;
use AlibabaCloud\Tea\Model;

class huntressIpCheckTypeResultDO extends Model
{
    /**
     * @var list_[]
     */
    public $list;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'list'    => 'List',
        'msg'     => 'Msg',
        'success' => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->list) {
            $res['List'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['List'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return huntressIpCheckTypeResultDO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['List'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
