<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewResponseBody\data\summaryConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewResponseBody\data\summaryConfig\callResultTagConfig\defaultTag;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewResponseBody\data\summaryConfig\callResultTagConfig\mappingTag;

class callResultTagConfig extends Model
{
    /**
     * @var defaultTag
     */
    public $defaultTag;

    /**
     * @var mappingTag
     */
    public $mappingTag;
    protected $_name = [
        'defaultTag' => 'DefaultTag',
        'mappingTag' => 'MappingTag',
    ];

    public function validate()
    {
        if (null !== $this->defaultTag) {
            $this->defaultTag->validate();
        }
        if (null !== $this->mappingTag) {
            $this->mappingTag->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultTag) {
            $res['DefaultTag'] = null !== $this->defaultTag ? $this->defaultTag->toArray($noStream) : $this->defaultTag;
        }

        if (null !== $this->mappingTag) {
            $res['MappingTag'] = null !== $this->mappingTag ? $this->mappingTag->toArray($noStream) : $this->mappingTag;
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
        if (isset($map['DefaultTag'])) {
            $model->defaultTag = defaultTag::fromMap($map['DefaultTag']);
        }

        if (isset($map['MappingTag'])) {
            $model->mappingTag = mappingTag::fromMap($map['MappingTag']);
        }

        return $model;
    }
}
