<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\pageInfos;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\pageInfos\subjectInfos\blockInfo;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\pageInfos\subjectInfos\contentInfos;
use AlibabaCloud\Tea\Model;

class subjectInfos extends Model
{
    /**
     * @var blockInfo
     */
    public $blockInfo;

    /**
     * @var string
     */
    public $content;

    /**
     * @var contentInfos[]
     */
    public $contentInfos;

    /**
     * @var int[]
     */
    public $ids;

    /**
     * @var bool
     */
    public $isMultiPage;
    protected $_name = [
        'blockInfo'    => 'BlockInfo',
        'content'      => 'Content',
        'contentInfos' => 'ContentInfos',
        'ids'          => 'Ids',
        'isMultiPage'  => 'IsMultiPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockInfo) {
            $res['BlockInfo'] = null !== $this->blockInfo ? $this->blockInfo->toMap() : null;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contentInfos) {
            $res['ContentInfos'] = [];
            if (null !== $this->contentInfos && \is_array($this->contentInfos)) {
                $n = 0;
                foreach ($this->contentInfos as $item) {
                    $res['ContentInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->isMultiPage) {
            $res['IsMultiPage'] = $this->isMultiPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subjectInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockInfo'])) {
            $model->blockInfo = blockInfo::fromMap($map['BlockInfo']);
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentInfos'])) {
            if (!empty($map['ContentInfos'])) {
                $model->contentInfos = [];
                $n                   = 0;
                foreach ($map['ContentInfos'] as $item) {
                    $model->contentInfos[$n++] = null !== $item ? contentInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Ids'])) {
            if (!empty($map['Ids'])) {
                $model->ids = $map['Ids'];
            }
        }
        if (isset($map['IsMultiPage'])) {
            $model->isMultiPage = $map['IsMultiPage'];
        }

        return $model;
    }
}
