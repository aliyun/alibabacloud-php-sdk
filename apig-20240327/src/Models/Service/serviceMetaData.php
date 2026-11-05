<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\Service;

use AlibabaCloud\Dara\Model;

class serviceMetaData extends Model
{
    /**
     * @var bool
     */
    public $dfpReferenced;

    /**
     * @var bool
     */
    public $extProc;
    protected $_name = [
        'dfpReferenced' => 'dfpReferenced',
        'extProc' => 'extProc',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dfpReferenced) {
            $res['dfpReferenced'] = $this->dfpReferenced;
        }

        if (null !== $this->extProc) {
            $res['extProc'] = $this->extProc;
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
        if (isset($map['dfpReferenced'])) {
            $model->dfpReferenced = $map['dfpReferenced'];
        }

        if (isset($map['extProc'])) {
            $model->extProc = $map['extProc'];
        }

        return $model;
    }
}
