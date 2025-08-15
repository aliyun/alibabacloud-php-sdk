<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocQaResponseBody\payload\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocQaResponseBody\payload\output\mediaUrlList\clipInfos;

class mediaUrlList extends Model
{
    /**
     * @var clipInfos[]
     */
    public $clipInfos;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $mediaType;
    protected $_name = [
        'clipInfos' => 'ClipInfos',
        'fileUrl' => 'FileUrl',
        'mediaType' => 'MediaType',
    ];

    public function validate()
    {
        if (\is_array($this->clipInfos)) {
            Model::validateArray($this->clipInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clipInfos) {
            if (\is_array($this->clipInfos)) {
                $res['ClipInfos'] = [];
                $n1 = 0;
                foreach ($this->clipInfos as $item1) {
                    $res['ClipInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
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
        if (isset($map['ClipInfos'])) {
            if (!empty($map['ClipInfos'])) {
                $model->clipInfos = [];
                $n1 = 0;
                foreach ($map['ClipInfos'] as $item1) {
                    $model->clipInfos[$n1] = clipInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }

        return $model;
    }
}
