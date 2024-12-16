<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocQaResponseBody\payload;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocQaResponseBody\payload\output\mediaUrlList;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocQaResponseBody\payload\output\recommends;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocQaResponseBody\payload\output\references;
use AlibabaCloud\Tea\Model;

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
     * @example false
     *
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
        'content'          => 'Content',
        'interveneContent' => 'InterveneContent',
        'isReject'         => 'IsReject',
        'mediaUrlList'     => 'MediaUrlList',
        'recommends'       => 'Recommends',
        'references'       => 'References',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['MediaUrlList'] = [];
            if (null !== $this->mediaUrlList && \is_array($this->mediaUrlList)) {
                $n = 0;
                foreach ($this->mediaUrlList as $item) {
                    $res['MediaUrlList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->recommends) {
            $res['Recommends'] = [];
            if (null !== $this->recommends && \is_array($this->recommends)) {
                $n = 0;
                foreach ($this->recommends as $item) {
                    $res['Recommends'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->references) {
            $res['References'] = [];
            if (null !== $this->references && \is_array($this->references)) {
                $n = 0;
                foreach ($this->references as $item) {
                    $res['References'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return output
     */
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
                $n                   = 0;
                foreach ($map['MediaUrlList'] as $item) {
                    $model->mediaUrlList[$n++] = null !== $item ? mediaUrlList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Recommends'])) {
            if (!empty($map['Recommends'])) {
                $model->recommends = [];
                $n                 = 0;
                foreach ($map['Recommends'] as $item) {
                    $model->recommends[$n++] = null !== $item ? recommends::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['References'])) {
            if (!empty($map['References'])) {
                $model->references = [];
                $n                 = 0;
                foreach ($map['References'] as $item) {
                    $model->references[$n++] = null !== $item ? references::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
