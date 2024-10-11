<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateTaskRequest;

use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateTaskRequest\examples\sentences;
use AlibabaCloud\Tea\Model;

class examples extends Model
{
    /**
     * @var string
     */
    public $output;

    /**
     * @description This parameter is required.
     *
     * @var sentences[]
     */
    public $sentences;
    protected $_name = [
        'output'    => 'output',
        'sentences' => 'sentences',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->output) {
            $res['output'] = $this->output;
        }
        if (null !== $this->sentences) {
            $res['sentences'] = [];
            if (null !== $this->sentences && \is_array($this->sentences)) {
                $n = 0;
                foreach ($this->sentences as $item) {
                    $res['sentences'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return examples
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['output'])) {
            $model->output = $map['output'];
        }
        if (isset($map['sentences'])) {
            if (!empty($map['sentences'])) {
                $model->sentences = [];
                $n                = 0;
                foreach ($map['sentences'] as $item) {
                    $model->sentences[$n++] = null !== $item ? sentences::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
