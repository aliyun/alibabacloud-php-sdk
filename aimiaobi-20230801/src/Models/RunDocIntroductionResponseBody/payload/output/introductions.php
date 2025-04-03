<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocIntroductionResponseBody\payload\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocIntroductionResponseBody\payload\output\introductions\blocks;

class introductions extends Model
{
    /**
     * @var blocks[]
     */
    public $blocks;

    /**
     * @var int
     */
    public $startPageId;

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
        'startPageId' => 'StartPageId',
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
                    $res['Blocks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->startPageId) {
            $res['StartPageId'] = $this->startPageId;
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
                    $model->blocks[$n1++] = blocks::fromMap($item1);
                }
            }
        }

        if (isset($map['StartPageId'])) {
            $model->startPageId = $map['StartPageId'];
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
