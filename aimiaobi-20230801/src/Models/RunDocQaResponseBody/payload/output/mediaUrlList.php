<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocQaResponseBody\payload\output;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocQaResponseBody\payload\output\mediaUrlList\clipInfos;
use AlibabaCloud\Tea\Model;

class mediaUrlList extends Model
{
    /**
     * @var clipInfos[]
     */
    public $clipInfos;

    /**
     * @example https://gw.alicdn.com/imgextra/i3/2775676850/O1CN01kdeffE20TM0E7wvpq_!!2775676850.jpg_q60.jpg
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @example video
     *
     * @var string
     */
    public $mediaType;
    protected $_name = [
        'clipInfos' => 'ClipInfos',
        'fileUrl' => 'FileUrl',
        'mediaType' => 'MediaType',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clipInfos) {
            $res['ClipInfos'] = [];
            if (null !== $this->clipInfos && \is_array($this->clipInfos)) {
                $n = 0;
                foreach ($this->clipInfos as $item) {
                    $res['ClipInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return mediaUrlList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClipInfos'])) {
            if (!empty($map['ClipInfos'])) {
                $model->clipInfos = [];
                $n = 0;
                foreach ($map['ClipInfos'] as $item) {
                    $model->clipInfos[$n++] = null !== $item ? clipInfos::fromMap($item) : $item;
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
