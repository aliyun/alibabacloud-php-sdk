<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesRequest;

use AlibabaCloud\Dara\Model;

class privatePoolOptions extends Model
{
    /**
     * @var string
     */
    public $ids;
    protected $_name = [
        'ids' => 'Ids',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
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
        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }

        return $model;
    }
}
