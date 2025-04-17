<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateTriggerRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\MNS;

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
        if (null !== $this->MNS) {
            $this->MNS->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->MNS) {
            $res['MNS'] = null !== $this->MNS ? $this->MNS->toArray($noStream) : $this->MNS;
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
        if (isset($map['MNS'])) {
            $model->MNS = MNS::fromMap($map['MNS']);
        }

        return $model;
    }
}
