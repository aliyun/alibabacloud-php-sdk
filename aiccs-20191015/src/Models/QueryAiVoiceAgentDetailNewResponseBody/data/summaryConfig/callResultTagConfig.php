<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewResponseBody\data\summaryConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewResponseBody\data\summaryConfig\callResultTagConfig\defaultTag;

class callResultTagConfig extends Model
{
    /**
     * @var defaultTag
     */
    public $defaultTag;

    /**
     * @var string[]
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
        if (\is_array($this->mappingTag)) {
            Model::validateArray($this->mappingTag);
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
            if (\is_array($this->mappingTag)) {
                $res['MappingTag'] = [];
                foreach ($this->mappingTag as $key1 => $value1) {
                    $res['MappingTag'][$key1] = $value1;
                }
            }
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
            if (!empty($map['MappingTag'])) {
                $model->mappingTag = [];
                foreach ($map['MappingTag'] as $key1 => $value1) {
                    $model->mappingTag[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
