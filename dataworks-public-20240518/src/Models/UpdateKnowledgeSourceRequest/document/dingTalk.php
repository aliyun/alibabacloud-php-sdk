<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateKnowledgeSourceRequest\document;

use AlibabaCloud\Dara\Model;

class dingTalk extends Model
{
    /**
     * @var string
     */
    public $mcpKey;

    /**
     * @var string[]
     */
    public $sourceUrls;
    protected $_name = [
        'mcpKey' => 'McpKey',
        'sourceUrls' => 'SourceUrls',
    ];

    public function validate()
    {
        if (\is_array($this->sourceUrls)) {
            Model::validateArray($this->sourceUrls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mcpKey) {
            $res['McpKey'] = $this->mcpKey;
        }

        if (null !== $this->sourceUrls) {
            if (\is_array($this->sourceUrls)) {
                $res['SourceUrls'] = [];
                $n1 = 0;
                foreach ($this->sourceUrls as $item1) {
                    $res['SourceUrls'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['McpKey'])) {
            $model->mcpKey = $map['McpKey'];
        }

        if (isset($map['SourceUrls'])) {
            if (!empty($map['SourceUrls'])) {
                $model->sourceUrls = [];
                $n1 = 0;
                foreach ($map['SourceUrls'] as $item1) {
                    $model->sourceUrls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
