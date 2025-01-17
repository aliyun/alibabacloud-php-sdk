<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeScreenScoreThreadResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $socreThread;
    /**
     * @var string[]
     */
    public $socreThreadDate;
    protected $_name = [
        'socreThread'     => 'SocreThread',
        'socreThreadDate' => 'SocreThreadDate',
    ];

    public function validate()
    {
        if (\is_array($this->socreThread)) {
            Model::validateArray($this->socreThread);
        }
        if (\is_array($this->socreThreadDate)) {
            Model::validateArray($this->socreThreadDate);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->socreThread) {
            if (\is_array($this->socreThread)) {
                $res['SocreThread'] = [];
                $n1                 = 0;
                foreach ($this->socreThread as $item1) {
                    $res['SocreThread'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->socreThreadDate) {
            if (\is_array($this->socreThreadDate)) {
                $res['SocreThreadDate'] = [];
                $n1                     = 0;
                foreach ($this->socreThreadDate as $item1) {
                    $res['SocreThreadDate'][$n1++] = $item1;
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
        if (isset($map['SocreThread'])) {
            if (!empty($map['SocreThread'])) {
                $model->socreThread = [];
                $n1                 = 0;
                foreach ($map['SocreThread'] as $item1) {
                    $model->socreThread[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SocreThreadDate'])) {
            if (!empty($map['SocreThreadDate'])) {
                $model->socreThreadDate = [];
                $n1                     = 0;
                foreach ($map['SocreThreadDate'] as $item1) {
                    $model->socreThreadDate[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
