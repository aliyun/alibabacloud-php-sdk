<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class PaasConditionSetDTO extends Model
{
    /**
     * @var PaasConditionEntryDTO[]
     */
    public $conditionEntries;
    protected $_name = [
        'conditionEntries' => 'ConditionEntries',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionEntries) {
            $res['ConditionEntries'] = [];
            if (null !== $this->conditionEntries && \is_array($this->conditionEntries)) {
                $n = 0;
                foreach ($this->conditionEntries as $item) {
                    $res['ConditionEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PaasConditionSetDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionEntries'])) {
            if (!empty($map['ConditionEntries'])) {
                $model->conditionEntries = [];
                $n                       = 0;
                foreach ($map['ConditionEntries'] as $item) {
                    $model->conditionEntries[$n++] = null !== $item ? PaasConditionEntryDTO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
