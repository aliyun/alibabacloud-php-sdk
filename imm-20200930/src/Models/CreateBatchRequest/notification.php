<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateBatchRequest;

use AlibabaCloud\SDK\Imm\V20200930\Models\MNS;
use AlibabaCloud\Tea\Model;

class notification extends Model
{
    /**
     * @var MNS
     */
    public $MNS;
    protected $_name = [
        'MNS' => 'MNS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->MNS) {
            $res['MNS'] = null !== $this->MNS ? $this->MNS->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notification
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MNS'])) {
            $model->MNS = MNS::fromMap($map['MNS']);
        }

        return $model;
    }
}
