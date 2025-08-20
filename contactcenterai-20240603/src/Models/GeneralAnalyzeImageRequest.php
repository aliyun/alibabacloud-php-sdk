<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models;

use AlibabaCloud\Dara\Model;

class GeneralAnalyzeImageRequest extends Model
{
    /**
     * @var string
     */
    public $customPrompt;

    /**
     * @var string[]
     */
    public $imageUrls;

    /**
     * @var bool
     */
    public $stream;

    /**
     * @var int[]
     */
    public $templateIds;
    protected $_name = [
        'customPrompt' => 'customPrompt',
        'imageUrls' => 'imageUrls',
        'stream' => 'stream',
        'templateIds' => 'templateIds',
    ];

    public function validate()
    {
        if (\is_array($this->imageUrls)) {
            Model::validateArray($this->imageUrls);
        }
        if (\is_array($this->templateIds)) {
            Model::validateArray($this->templateIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customPrompt) {
            $res['customPrompt'] = $this->customPrompt;
        }

        if (null !== $this->imageUrls) {
            if (\is_array($this->imageUrls)) {
                $res['imageUrls'] = [];
                $n1 = 0;
                foreach ($this->imageUrls as $item1) {
                    $res['imageUrls'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
        }

        if (null !== $this->templateIds) {
            if (\is_array($this->templateIds)) {
                $res['templateIds'] = [];
                $n1 = 0;
                foreach ($this->templateIds as $item1) {
                    $res['templateIds'][$n1] = $item1;
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
        if (isset($map['customPrompt'])) {
            $model->customPrompt = $map['customPrompt'];
        }

        if (isset($map['imageUrls'])) {
            if (!empty($map['imageUrls'])) {
                $model->imageUrls = [];
                $n1 = 0;
                foreach ($map['imageUrls'] as $item1) {
                    $model->imageUrls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }

        if (isset($map['templateIds'])) {
            if (!empty($map['templateIds'])) {
                $model->templateIds = [];
                $n1 = 0;
                foreach ($map['templateIds'] as $item1) {
                    $model->templateIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
