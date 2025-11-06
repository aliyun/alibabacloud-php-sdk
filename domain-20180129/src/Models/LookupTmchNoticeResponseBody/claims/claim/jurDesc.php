<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim;

use AlibabaCloud\Dara\Model;

class jurDesc extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $jurCC;
    protected $_name = [
        'desc' => 'Desc',
        'jurCC' => 'JurCC',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        if (null !== $this->jurCC) {
            $res['JurCC'] = $this->jurCC;
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
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        if (isset($map['JurCC'])) {
            $model->jurCC = $map['JurCC'];
        }

        return $model;
    }
}
