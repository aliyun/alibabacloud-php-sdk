<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models\ConvertFlowDSLInput;

use AlibabaCloud\Dara\Model;

class dslSource extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $encoding;

    /**
     * @var string
     */
    public $provider;
    protected $_name = [
        'content' => 'content',
        'encoding' => 'encoding',
        'provider' => 'provider',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->encoding) {
            $res['encoding'] = $this->encoding;
        }

        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['encoding'])) {
            $model->encoding = $map['encoding'];
        }

        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        return $model;
    }
}
