<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\VideoGenerationRequest\input;
use AlibabaCloud\SDK\Aidge\V20260428\Models\VideoGenerationRequest\intent;
use AlibabaCloud\SDK\Aidge\V20260428\Models\VideoGenerationRequest\output;

class VideoGenerationRequest extends Model
{
    /**
     * @var input
     */
    public $input;

    /**
     * @var intent
     */
    public $intent;

    /**
     * @var output
     */
    public $output;
    protected $_name = [
        'input' => 'Input',
        'intent' => 'Intent',
        'output' => 'Output',
    ];

    public function validate()
    {
        if (null !== $this->input) {
            $this->input->validate();
        }
        if (null !== $this->intent) {
            $this->intent->validate();
        }
        if (null !== $this->output) {
            $this->output->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toArray($noStream) : $this->input;
        }

        if (null !== $this->intent) {
            $res['Intent'] = null !== $this->intent ? $this->intent->toArray($noStream) : $this->intent;
        }

        if (null !== $this->output) {
            $res['Output'] = null !== $this->output ? $this->output->toArray($noStream) : $this->output;
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
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }

        if (isset($map['Intent'])) {
            $model->intent = intent::fromMap($map['Intent']);
        }

        if (isset($map['Output'])) {
            $model->output = output::fromMap($map['Output']);
        }

        return $model;
    }
}
