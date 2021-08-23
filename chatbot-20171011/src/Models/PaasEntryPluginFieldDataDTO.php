<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class PaasEntryPluginFieldDataDTO extends Model
{
    /**
     * @description ContentEntry
     *
     * @var PaasConditionSetDTO[]
     */
    public $contentEntry;

    /**
     * @description LifeSpan
     *
     * @var int
     */
    public $lifeSpan;

    /**
     * @description Name
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'contentEntry' => 'ContentEntry',
        'lifeSpan'     => 'LifeSpan',
        'name'         => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentEntry) {
            $res['ContentEntry'] = [];
            if (null !== $this->contentEntry && \is_array($this->contentEntry)) {
                $n = 0;
                foreach ($this->contentEntry as $item) {
                    $res['ContentEntry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lifeSpan) {
            $res['LifeSpan'] = $this->lifeSpan;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PaasEntryPluginFieldDataDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContentEntry'])) {
            if (!empty($map['ContentEntry'])) {
                $model->contentEntry = [];
                $n                   = 0;
                foreach ($map['ContentEntry'] as $item) {
                    $model->contentEntry[$n++] = null !== $item ? PaasConditionSetDTO::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LifeSpan'])) {
            $model->lifeSpan = $map['LifeSpan'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
