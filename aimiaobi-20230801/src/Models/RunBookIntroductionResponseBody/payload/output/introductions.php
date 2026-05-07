<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunBookIntroductionResponseBody\payload\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunBookIntroductionResponseBody\payload\output\introductions\blocks;

class introductions extends Model
{
    /**
     * @var blocks[]
     */
    public $blocks;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'blocks' => 'Blocks',
        'summary' => 'Summary',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->blocks)) {
            Model::validateArray($this->blocks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blocks) {
            if (\is_array($this->blocks)) {
                $res['Blocks'] = [];
                $n1 = 0;
                foreach ($this->blocks as $item1) {
                    $res['Blocks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['Blocks'])) {
            if (!empty($map['Blocks'])) {
                $model->blocks = [];
                $n1 = 0;
                foreach ($map['Blocks'] as $item1) {
                    $model->blocks[$n1] = blocks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
