<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunLegalAdviceConsultationRequest;

use AlibabaCloud\Dara\Model;

class extra extends Model
{
    /**
     * @var bool
     */
    public $deepThink;

    /**
     * @var bool
     */
    public $onlineSearch;
    protected $_name = [
        'deepThink' => 'deepThink',
        'onlineSearch' => 'onlineSearch',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deepThink) {
            $res['deepThink'] = $this->deepThink;
        }

        if (null !== $this->onlineSearch) {
            $res['onlineSearch'] = $this->onlineSearch;
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
        if (isset($map['deepThink'])) {
            $model->deepThink = $map['deepThink'];
        }

        if (isset($map['onlineSearch'])) {
            $model->onlineSearch = $map['onlineSearch'];
        }

        return $model;
    }
}
