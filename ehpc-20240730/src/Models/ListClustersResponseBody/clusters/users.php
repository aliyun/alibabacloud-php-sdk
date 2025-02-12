<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\clusters;

use AlibabaCloud\Dara\Model;

class users extends Model
{
    /**
     * @var int
     */
    public $normalCounts;
    /**
     * @var int
     */
    public $sudoCounts;
    protected $_name = [
        'normalCounts' => 'NormalCounts',
        'sudoCounts'   => 'SudoCounts',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->normalCounts) {
            $res['NormalCounts'] = $this->normalCounts;
        }

        if (null !== $this->sudoCounts) {
            $res['SudoCounts'] = $this->sudoCounts;
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
        if (isset($map['NormalCounts'])) {
            $model->normalCounts = $map['NormalCounts'];
        }

        if (isset($map['SudoCounts'])) {
            $model->sudoCounts = $map['SudoCounts'];
        }

        return $model;
    }
}
