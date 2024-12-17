<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest\agentContext;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest\agentContext\bizContext\multimodalMediaSelection;
use AlibabaCloud\Tea\Model;

class bizContext extends Model
{
    /**
     * @var multimodalMediaSelection
     */
    public $multimodalMediaSelection;
    protected $_name = [
        'multimodalMediaSelection' => 'MultimodalMediaSelection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->multimodalMediaSelection) {
            $res['MultimodalMediaSelection'] = null !== $this->multimodalMediaSelection ? $this->multimodalMediaSelection->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bizContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MultimodalMediaSelection'])) {
            $model->multimodalMediaSelection = multimodalMediaSelection::fromMap($map['MultimodalMediaSelection']);
        }

        return $model;
    }
}
