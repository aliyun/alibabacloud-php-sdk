<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunScriptChatResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunScriptChatResponseBody\payload\output;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunScriptChatResponseBody\payload\usage;

class payload extends Model
{
    /**
     * @var output
     */
    public $output;

    /**
     * @var usage
     */
    public $usage;
    protected $_name = [
        'output' => 'output',
        'usage' => 'usage',
    ];

    public function validate()
    {
        if (null !== $this->output) {
            $this->output->validate();
        }
        if (null !== $this->usage) {
            $this->usage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->output) {
            $res['output'] = null !== $this->output ? $this->output->toArray($noStream) : $this->output;
        }

        if (null !== $this->usage) {
            $res['usage'] = null !== $this->usage ? $this->usage->toArray($noStream) : $this->usage;
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
        if (isset($map['output'])) {
            $model->output = output::fromMap($map['output']);
        }

        if (isset($map['usage'])) {
            $model->usage = usage::fromMap($map['usage']);
        }

        return $model;
    }
}
