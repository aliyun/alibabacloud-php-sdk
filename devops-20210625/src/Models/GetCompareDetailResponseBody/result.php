<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetCompareDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetCompareDetailResponseBody\result\commits;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetCompareDetailResponseBody\result\diffs;

class result extends Model
{
    /**
     * @var commits[]
     */
    public $commits;
    /**
     * @var diffs[]
     */
    public $diffs;
    /**
     * @var string[]
     */
    public $messages;
    protected $_name = [
        'commits'  => 'commits',
        'diffs'    => 'diffs',
        'messages' => 'messages',
    ];

    public function validate()
    {
        if (\is_array($this->commits)) {
            Model::validateArray($this->commits);
        }
        if (\is_array($this->diffs)) {
            Model::validateArray($this->diffs);
        }
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commits) {
            if (\is_array($this->commits)) {
                $res['commits'] = [];
                $n1             = 0;
                foreach ($this->commits as $item1) {
                    $res['commits'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->diffs) {
            if (\is_array($this->diffs)) {
                $res['diffs'] = [];
                $n1           = 0;
                foreach ($this->diffs as $item1) {
                    $res['diffs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->messages) {
            if (\is_array($this->messages)) {
                $res['messages'] = [];
                $n1              = 0;
                foreach ($this->messages as $item1) {
                    $res['messages'][$n1++] = $item1;
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
        if (isset($map['commits'])) {
            if (!empty($map['commits'])) {
                $model->commits = [];
                $n1             = 0;
                foreach ($map['commits'] as $item1) {
                    $model->commits[$n1++] = commits::fromMap($item1);
                }
            }
        }

        if (isset($map['diffs'])) {
            if (!empty($map['diffs'])) {
                $model->diffs = [];
                $n1           = 0;
                foreach ($map['diffs'] as $item1) {
                    $model->diffs[$n1++] = diffs::fromMap($item1);
                }
            }
        }

        if (isset($map['messages'])) {
            if (!empty($map['messages'])) {
                $model->messages = [];
                $n1              = 0;
                foreach ($map['messages'] as $item1) {
                    $model->messages[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
