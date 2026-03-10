<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateHighlightTaskRequest\edit;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateHighlightTaskRequest\highlight;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateHighlightTaskRequest\output;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateHighlightTaskRequest\sources;

class CreateHighlightTaskRequest extends Model
{
    /**
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @var edit
     */
    public $edit;

    /**
     * @var highlight
     */
    public $highlight;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var Notification
     */
    public $notification;

    /**
     * @var output
     */
    public $output;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var sources[]
     */
    public $sources;

    /**
     * @var mixed[]
     */
    public $tags;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'credentialConfig' => 'CredentialConfig',
        'edit' => 'Edit',
        'highlight' => 'Highlight',
        'mode' => 'Mode',
        'notification' => 'Notification',
        'output' => 'Output',
        'projectName' => 'ProjectName',
        'sources' => 'Sources',
        'tags' => 'Tags',
        'type' => 'Type',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        if (null !== $this->credentialConfig) {
            $this->credentialConfig->validate();
        }
        if (null !== $this->edit) {
            $this->edit->validate();
        }
        if (null !== $this->highlight) {
            $this->highlight->validate();
        }
        if (null !== $this->notification) {
            $this->notification->validate();
        }
        if (null !== $this->output) {
            $this->output->validate();
        }
        if (\is_array($this->sources)) {
            Model::validateArray($this->sources);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toArray($noStream) : $this->credentialConfig;
        }

        if (null !== $this->edit) {
            $res['Edit'] = null !== $this->edit ? $this->edit->toArray($noStream) : $this->edit;
        }

        if (null !== $this->highlight) {
            $res['Highlight'] = null !== $this->highlight ? $this->highlight->toArray($noStream) : $this->highlight;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toArray($noStream) : $this->notification;
        }

        if (null !== $this->output) {
            $res['Output'] = null !== $this->output ? $this->output->toArray($noStream) : $this->output;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->sources) {
            if (\is_array($this->sources)) {
                $res['Sources'] = [];
                $n1 = 0;
                foreach ($this->sources as $item1) {
                    $res['Sources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['Tags'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = CredentialConfig::fromMap($map['CredentialConfig']);
        }

        if (isset($map['Edit'])) {
            $model->edit = edit::fromMap($map['Edit']);
        }

        if (isset($map['Highlight'])) {
            $model->highlight = highlight::fromMap($map['Highlight']);
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['Notification'])) {
            $model->notification = Notification::fromMap($map['Notification']);
        }

        if (isset($map['Output'])) {
            $model->output = output::fromMap($map['Output']);
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['Sources'])) {
            if (!empty($map['Sources'])) {
                $model->sources = [];
                $n1 = 0;
                foreach ($map['Sources'] as $item1) {
                    $model->sources[$n1] = sources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                foreach ($map['Tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
