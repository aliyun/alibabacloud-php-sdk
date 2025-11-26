<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionResourceResponseBody\data;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionResourceResponseBody\pager;

class DescribeRegionResourceResponseBody extends Model
{
    /**
     * @var data[]
     */
    public $data;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var pager
     */
    public $pager;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data' => 'Data',
        'desc' => 'Desc',
        'msg' => 'Msg',
        'pager' => 'Pager',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        if (null !== $this->pager) {
            $this->pager->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['Data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    $res['Data'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }

        if (null !== $this->pager) {
            $res['Pager'] = null !== $this->pager ? $this->pager->toArray($noStream) : $this->pager;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['Data'] as $item1) {
                    $model->data[$n1] = data::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }

        if (isset($map['Pager'])) {
            $model->pager = pager::fromMap($map['Pager']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
