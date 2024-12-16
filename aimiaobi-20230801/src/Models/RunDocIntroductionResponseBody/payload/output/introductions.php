<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocIntroductionResponseBody\payload\output;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocIntroductionResponseBody\payload\output\introductions\blocks;
use AlibabaCloud\Tea\Model;

class introductions extends Model
{
    /**
     * @var blocks[]
     */
    public $blocks;

    /**
     * @example 10
     *
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
        'blocks'      => 'Blocks',
        'startPageId' => 'StartPageId',
        'summary'     => 'Summary',
        'title'       => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blocks) {
            $res['Blocks'] = [];
            if (null !== $this->blocks && \is_array($this->blocks)) {
                $n = 0;
                foreach ($this->blocks as $item) {
                    $res['Blocks'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return introductions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Blocks'])) {
            if (!empty($map['Blocks'])) {
                $model->blocks = [];
                $n             = 0;
                foreach ($map['Blocks'] as $item) {
                    $model->blocks[$n++] = null !== $item ? blocks::fromMap($item) : $item;
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
