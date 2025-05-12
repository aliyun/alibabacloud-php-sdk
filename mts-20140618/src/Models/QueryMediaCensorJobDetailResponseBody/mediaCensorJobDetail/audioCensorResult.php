<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail\audioCensorResult\audioDetailResultList;

class audioCensorResult extends Model
{
    /**
     * @var audioDetailResultList
     */
    public $audioDetailResultList;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'audioDetailResultList' => 'AudioDetailResultList',
        'label' => 'Label',
        'suggestion' => 'Suggestion',
    ];

    public function validate()
    {
        if (null !== $this->audioDetailResultList) {
            $this->audioDetailResultList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioDetailResultList) {
            $res['AudioDetailResultList'] = null !== $this->audioDetailResultList ? $this->audioDetailResultList->toArray($noStream) : $this->audioDetailResultList;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
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
        if (isset($map['AudioDetailResultList'])) {
            $model->audioDetailResultList = audioDetailResultList::fromMap($map['AudioDetailResultList']);
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        return $model;
    }
}
