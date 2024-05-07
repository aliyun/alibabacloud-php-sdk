<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateVideoMergeTaskRequest;

use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateVideoMergeTaskRequest\videoMergeRequest\layoutStyles;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateVideoMergeTaskRequest\videoMergeRequest\videoList;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateVideoMergeTaskRequest\videoMergeRequest\watermark;
use AlibabaCloud\Tea\Model;

class videoMergeRequest extends Model
{
    /**
     * @example https://h5-api.neoclub.cn/v1/bff/service/other/rtc/callback
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @var layoutStyles[]
     */
    public $layoutStyles;

    /**
     * @var videoList[]
     */
    public $videoList;

    /**
     * @var watermark
     */
    public $watermark;
    protected $_name = [
        'callbackUrl'  => 'CallbackUrl',
        'layoutStyles' => 'LayoutStyles',
        'videoList'    => 'VideoList',
        'watermark'    => 'Watermark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->layoutStyles) {
            $res['LayoutStyles'] = [];
            if (null !== $this->layoutStyles && \is_array($this->layoutStyles)) {
                $n = 0;
                foreach ($this->layoutStyles as $item) {
                    $res['LayoutStyles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->videoList) {
            $res['VideoList'] = [];
            if (null !== $this->videoList && \is_array($this->videoList)) {
                $n = 0;
                foreach ($this->videoList as $item) {
                    $res['VideoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->watermark) {
            $res['Watermark'] = null !== $this->watermark ? $this->watermark->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoMergeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['LayoutStyles'])) {
            if (!empty($map['LayoutStyles'])) {
                $model->layoutStyles = [];
                $n                   = 0;
                foreach ($map['LayoutStyles'] as $item) {
                    $model->layoutStyles[$n++] = null !== $item ? layoutStyles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VideoList'])) {
            if (!empty($map['VideoList'])) {
                $model->videoList = [];
                $n                = 0;
                foreach ($map['VideoList'] as $item) {
                    $model->videoList[$n++] = null !== $item ? videoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Watermark'])) {
            $model->watermark = watermark::fromMap($map['Watermark']);
        }

        return $model;
    }
}
