<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunStepByStepWritingRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunStepByStepWritingRequest\referenceData\articles;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunStepByStepWritingRequest\referenceData\outlines;

class referenceData extends Model
{
    /**
     * @var articles[]
     */
    public $articles;

    /**
     * @var string[]
     */
    public $miniDoc;

    /**
     * @var outlines[]
     */
    public $outlines;

    /**
     * @var string[]
     */
    public $summarization;
    protected $_name = [
        'articles' => 'Articles',
        'miniDoc' => 'MiniDoc',
        'outlines' => 'Outlines',
        'summarization' => 'Summarization',
    ];

    public function validate()
    {
        if (\is_array($this->articles)) {
            Model::validateArray($this->articles);
        }
        if (\is_array($this->miniDoc)) {
            Model::validateArray($this->miniDoc);
        }
        if (\is_array($this->outlines)) {
            Model::validateArray($this->outlines);
        }
        if (\is_array($this->summarization)) {
            Model::validateArray($this->summarization);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->articles) {
            if (\is_array($this->articles)) {
                $res['Articles'] = [];
                $n1 = 0;
                foreach ($this->articles as $item1) {
                    $res['Articles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->miniDoc) {
            if (\is_array($this->miniDoc)) {
                $res['MiniDoc'] = [];
                $n1 = 0;
                foreach ($this->miniDoc as $item1) {
                    $res['MiniDoc'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->outlines) {
            if (\is_array($this->outlines)) {
                $res['Outlines'] = [];
                $n1 = 0;
                foreach ($this->outlines as $item1) {
                    $res['Outlines'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->summarization) {
            if (\is_array($this->summarization)) {
                $res['Summarization'] = [];
                $n1 = 0;
                foreach ($this->summarization as $item1) {
                    $res['Summarization'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['Articles'])) {
            if (!empty($map['Articles'])) {
                $model->articles = [];
                $n1 = 0;
                foreach ($map['Articles'] as $item1) {
                    $model->articles[$n1] = articles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MiniDoc'])) {
            if (!empty($map['MiniDoc'])) {
                $model->miniDoc = [];
                $n1 = 0;
                foreach ($map['MiniDoc'] as $item1) {
                    $model->miniDoc[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Outlines'])) {
            if (!empty($map['Outlines'])) {
                $model->outlines = [];
                $n1 = 0;
                foreach ($map['Outlines'] as $item1) {
                    $model->outlines[$n1] = outlines::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Summarization'])) {
            if (!empty($map['Summarization'])) {
                $model->summarization = [];
                $n1 = 0;
                foreach ($map['Summarization'] as $item1) {
                    $model->summarization[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
