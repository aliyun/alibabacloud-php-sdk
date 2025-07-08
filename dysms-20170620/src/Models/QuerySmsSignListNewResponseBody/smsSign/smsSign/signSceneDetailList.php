<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignListNewResponseBody\smsSign\smsSign;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignListNewResponseBody\smsSign\smsSign\signSceneDetailList\signSceneDetail;

class signSceneDetailList extends Model
{
    /**
     * @var signSceneDetail[]
     */
    public $signSceneDetail;
    protected $_name = [
        'signSceneDetail' => 'SignSceneDetail',
    ];

    public function validate()
    {
        if (\is_array($this->signSceneDetail)) {
            Model::validateArray($this->signSceneDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->signSceneDetail) {
            if (\is_array($this->signSceneDetail)) {
                $res['SignSceneDetail'] = [];
                $n1 = 0;
                foreach ($this->signSceneDetail as $item1) {
                    $res['SignSceneDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['SignSceneDetail'])) {
            if (!empty($map['SignSceneDetail'])) {
                $model->signSceneDetail = [];
                $n1 = 0;
                foreach ($map['SignSceneDetail'] as $item1) {
                    $model->signSceneDetail[$n1] = signSceneDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
