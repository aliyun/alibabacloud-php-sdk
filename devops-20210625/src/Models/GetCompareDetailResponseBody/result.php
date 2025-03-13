<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetCompareDetailResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetCompareDetailResponseBody\result\commits;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetCompareDetailResponseBody\result\diffs;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commits) {
            $res['commits'] = [];
            if (null !== $this->commits && \is_array($this->commits)) {
                $n = 0;
                foreach ($this->commits as $item) {
                    $res['commits'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->diffs) {
            $res['diffs'] = [];
            if (null !== $this->diffs && \is_array($this->diffs)) {
                $n = 0;
                foreach ($this->diffs as $item) {
                    $res['diffs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->messages) {
            $res['messages'] = $this->messages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commits'])) {
            if (!empty($map['commits'])) {
                $model->commits = [];
                $n              = 0;
                foreach ($map['commits'] as $item) {
                    $model->commits[$n++] = null !== $item ? commits::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['diffs'])) {
            if (!empty($map['diffs'])) {
                $model->diffs = [];
                $n            = 0;
                foreach ($map['diffs'] as $item) {
                    $model->diffs[$n++] = null !== $item ? diffs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['messages'])) {
            if (!empty($map['messages'])) {
                $model->messages = $map['messages'];
            }
        }

        return $model;
    }
}
