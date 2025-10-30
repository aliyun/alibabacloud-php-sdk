<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddRegisterLineageRequest\addRegisterLineageCommand;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddRegisterLineageRequest\addRegisterLineageCommand\detailedLineages\source;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddRegisterLineageRequest\addRegisterLineageCommand\detailedLineages\target;

class detailedLineages extends Model
{
    /**
     * @var bool
     */
    public $isDirect;

    /**
     * @var source
     */
    public $source;

    /**
     * @var target
     */
    public $target;
    protected $_name = [
        'isDirect' => 'IsDirect',
        'source' => 'Source',
        'target' => 'Target',
    ];

    public function validate()
    {
        if (null !== $this->source) {
            $this->source->validate();
        }
        if (null !== $this->target) {
            $this->target->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isDirect) {
            $res['IsDirect'] = $this->isDirect;
        }

        if (null !== $this->source) {
            $res['Source'] = null !== $this->source ? $this->source->toArray($noStream) : $this->source;
        }

        if (null !== $this->target) {
            $res['Target'] = null !== $this->target ? $this->target->toArray($noStream) : $this->target;
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
        if (isset($map['IsDirect'])) {
            $model->isDirect = $map['IsDirect'];
        }

        if (isset($map['Source'])) {
            $model->source = source::fromMap($map['Source']);
        }

        if (isset($map['Target'])) {
            $model->target = target::fromMap($map['Target']);
        }

        return $model;
    }
}
