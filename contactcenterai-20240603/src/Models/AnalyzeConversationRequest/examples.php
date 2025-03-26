<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest\examples\sentences;

class examples extends Model
{
    /**
     * @var string
     */
    public $output;

    /**
     * @var sentences[]
     */
    public $sentences;
    protected $_name = [
        'output' => 'output',
        'sentences' => 'sentences',
    ];

    public function validate()
    {
        if (\is_array($this->sentences)) {
            Model::validateArray($this->sentences);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->output) {
            $res['output'] = $this->output;
        }

        if (null !== $this->sentences) {
            if (\is_array($this->sentences)) {
                $res['sentences'] = [];
                $n1 = 0;
                foreach ($this->sentences as $item1) {
                    $res['sentences'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['output'])) {
            $model->output = $map['output'];
        }

        if (isset($map['sentences'])) {
            if (!empty($map['sentences'])) {
                $model->sentences = [];
                $n1 = 0;
                foreach ($map['sentences'] as $item1) {
                    $model->sentences[$n1++] = sentences::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
