<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest\agentContext;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest\agentContext\bizContext\multimodalMediaSelection;

class bizContext extends Model
{
    /**
     * @var multimodalMediaSelection
     */
    public $multimodalMediaSelection;

    /**
     * @var bool
     */
    public $skipCurrentSupplement;
    protected $_name = [
        'multimodalMediaSelection' => 'MultimodalMediaSelection',
        'skipCurrentSupplement' => 'SkipCurrentSupplement',
    ];

    public function validate()
    {
        if (null !== $this->multimodalMediaSelection) {
            $this->multimodalMediaSelection->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->multimodalMediaSelection) {
            $res['MultimodalMediaSelection'] = null !== $this->multimodalMediaSelection ? $this->multimodalMediaSelection->toArray($noStream) : $this->multimodalMediaSelection;
        }

        if (null !== $this->skipCurrentSupplement) {
            $res['SkipCurrentSupplement'] = $this->skipCurrentSupplement;
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
        if (isset($map['MultimodalMediaSelection'])) {
            $model->multimodalMediaSelection = multimodalMediaSelection::fromMap($map['MultimodalMediaSelection']);
        }

        if (isset($map['SkipCurrentSupplement'])) {
            $model->skipCurrentSupplement = $map['SkipCurrentSupplement'];
        }

        return $model;
    }
}
