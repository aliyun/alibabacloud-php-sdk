<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DescribeDifyEditionsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $community;

    /**
     * @var string[]
     */
    public $enterprise;
    protected $_name = [
        'community' => 'Community',
        'enterprise' => 'Enterprise',
    ];

    public function validate()
    {
        if (\is_array($this->community)) {
            Model::validateArray($this->community);
        }
        if (\is_array($this->enterprise)) {
            Model::validateArray($this->enterprise);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->community) {
            if (\is_array($this->community)) {
                $res['Community'] = [];
                $n1 = 0;
                foreach ($this->community as $item1) {
                    $res['Community'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enterprise) {
            if (\is_array($this->enterprise)) {
                $res['Enterprise'] = [];
                $n1 = 0;
                foreach ($this->enterprise as $item1) {
                    $res['Enterprise'][$n1] = $item1;
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
        if (isset($map['Community'])) {
            if (!empty($map['Community'])) {
                $model->community = [];
                $n1 = 0;
                foreach ($map['Community'] as $item1) {
                    $model->community[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Enterprise'])) {
            if (!empty($map['Enterprise'])) {
                $model->enterprise = [];
                $n1 = 0;
                foreach ($map['Enterprise'] as $item1) {
                    $model->enterprise[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
