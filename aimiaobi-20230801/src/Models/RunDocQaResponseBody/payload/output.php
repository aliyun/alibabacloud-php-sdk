<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocQaResponseBody\payload;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocQaResponseBody\payload\output\mediaUrlList;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocQaResponseBody\payload\output\recommends;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocQaResponseBody\payload\output\references;

class output extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $interveneContent;

    /**
     * @var bool
     */
    public $isReject;

    /**
     * @var mediaUrlList[]
     */
    public $mediaUrlList;

    /**
     * @var recommends[]
     */
    public $recommends;

    /**
     * @var references[]
     */
    public $references;
    protected $_name = [
        'content' => 'Content',
        'interveneContent' => 'InterveneContent',
        'isReject' => 'IsReject',
        'mediaUrlList' => 'MediaUrlList',
        'recommends' => 'Recommends',
        'references' => 'References',
    ];

    public function validate()
    {
        if (\is_array($this->mediaUrlList)) {
            Model::validateArray($this->mediaUrlList);
        }
        if (\is_array($this->recommends)) {
            Model::validateArray($this->recommends);
        }
        if (\is_array($this->references)) {
            Model::validateArray($this->references);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->interveneContent) {
            $res['InterveneContent'] = $this->interveneContent;
        }

        if (null !== $this->isReject) {
            $res['IsReject'] = $this->isReject;
        }

        if (null !== $this->mediaUrlList) {
            if (\is_array($this->mediaUrlList)) {
                $res['MediaUrlList'] = [];
                $n1 = 0;
                foreach ($this->mediaUrlList as $item1) {
                    $res['MediaUrlList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->recommends) {
            if (\is_array($this->recommends)) {
                $res['Recommends'] = [];
                $n1 = 0;
                foreach ($this->recommends as $item1) {
                    $res['Recommends'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->references) {
            if (\is_array($this->references)) {
                $res['References'] = [];
                $n1 = 0;
                foreach ($this->references as $item1) {
                    $res['References'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['InterveneContent'])) {
            $model->interveneContent = $map['InterveneContent'];
        }

        if (isset($map['IsReject'])) {
            $model->isReject = $map['IsReject'];
        }

        if (isset($map['MediaUrlList'])) {
            if (!empty($map['MediaUrlList'])) {
                $model->mediaUrlList = [];
                $n1 = 0;
                foreach ($map['MediaUrlList'] as $item1) {
                    $model->mediaUrlList[$n1] = mediaUrlList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Recommends'])) {
            if (!empty($map['Recommends'])) {
                $model->recommends = [];
                $n1 = 0;
                foreach ($map['Recommends'] as $item1) {
                    $model->recommends[$n1] = recommends::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['References'])) {
            if (!empty($map['References'])) {
                $model->references = [];
                $n1 = 0;
                foreach ($map['References'] as $item1) {
                    $model->references[$n1] = references::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
