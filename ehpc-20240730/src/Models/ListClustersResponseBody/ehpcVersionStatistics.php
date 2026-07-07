<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody;

use AlibabaCloud\Dara\Model;

class ehpcVersionStatistics extends Model
{
    /**
     * @var int
     */
    public $v1Count;

    /**
     * @var int
     */
    public $v2Count;
    protected $_name = [
        'v1Count' => 'V1Count',
        'v2Count' => 'V2Count',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->v1Count) {
            $res['V1Count'] = $this->v1Count;
        }

        if (null !== $this->v2Count) {
            $res['V2Count'] = $this->v2Count;
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
        if (isset($map['V1Count'])) {
            $model->v1Count = $map['V1Count'];
        }

        if (isset($map['V2Count'])) {
            $model->v2Count = $map['V2Count'];
        }

        return $model;
    }
}
