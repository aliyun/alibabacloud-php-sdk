<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class PrivatePoolOptions extends Model
{
    /**
     * @var string
     */
    public $matchCriteria;
    /**
     * @var string[]
     */
    public $privatePoolIds;
    protected $_name = [
        'matchCriteria'  => 'MatchCriteria',
        'privatePoolIds' => 'PrivatePoolIds',
    ];

    public function validate()
    {
        if (\is_array($this->privatePoolIds)) {
            Model::validateArray($this->privatePoolIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->matchCriteria) {
            $res['MatchCriteria'] = $this->matchCriteria;
        }

        if (null !== $this->privatePoolIds) {
            if (\is_array($this->privatePoolIds)) {
                $res['PrivatePoolIds'] = [];
                $n1                    = 0;
                foreach ($this->privatePoolIds as $item1) {
                    $res['PrivatePoolIds'][$n1++] = $item1;
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
        if (isset($map['MatchCriteria'])) {
            $model->matchCriteria = $map['MatchCriteria'];
        }

        if (isset($map['PrivatePoolIds'])) {
            if (!empty($map['PrivatePoolIds'])) {
                $model->privatePoolIds = [];
                $n1                    = 0;
                foreach ($map['PrivatePoolIds'] as $item1) {
                    $model->privatePoolIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
