<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class PaasPluginDataDTO extends Model
{
    /**
     * @var PaasEntryDTO
     */
    public $entry;

    /**
     * @var PaasSlotDTO
     */
    public $slot;

    /**
     * @var PaasResponseDTO
     */
    public $response;

    /**
     * @var PaasFunctionDTO
     */
    public $function;
    protected $_name = [
        'entry'    => 'Entry',
        'slot'     => 'Slot',
        'response' => 'Response',
        'function' => 'Function',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entry) {
            $res['Entry'] = null !== $this->entry ? $this->entry->toMap() : null;
        }
        if (null !== $this->slot) {
            $res['Slot'] = null !== $this->slot ? $this->slot->toMap() : null;
        }
        if (null !== $this->response) {
            $res['Response'] = null !== $this->response ? $this->response->toMap() : null;
        }
        if (null !== $this->function) {
            $res['Function'] = null !== $this->function ? $this->function->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PaasPluginDataDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Entry'])) {
            $model->entry = PaasEntryDTO::fromMap($map['Entry']);
        }
        if (isset($map['Slot'])) {
            $model->slot = PaasSlotDTO::fromMap($map['Slot']);
        }
        if (isset($map['Response'])) {
            $model->response = PaasResponseDTO::fromMap($map['Response']);
        }
        if (isset($map['Function'])) {
            $model->function = PaasFunctionDTO::fromMap($map['Function']);
        }

        return $model;
    }
}
