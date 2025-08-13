<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class DescribeVariableFeeRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int[]
     */
    public $ids;

    /**
     * @var string
     */
    public $regId;
    protected $_name = [
        'lang' => 'Lang',
        'ids' => 'ids',
        'regId' => 'regId',
    ];

    public function validate()
    {
        if (\is_array($this->ids)) {
            Model::validateArray($this->ids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->ids) {
            if (\is_array($this->ids)) {
                $res['ids'] = [];
                $n1 = 0;
                foreach ($this->ids as $item1) {
                    $res['ids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['ids'])) {
            if (!empty($map['ids'])) {
                $model->ids = [];
                $n1 = 0;
                foreach ($map['ids'] as $item1) {
                    $model->ids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        return $model;
    }
}
