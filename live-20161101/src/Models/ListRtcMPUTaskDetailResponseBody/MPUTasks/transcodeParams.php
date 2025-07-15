<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody\MPUTasks;

use AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody\MPUTasks\transcodeParams\background;
use AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody\MPUTasks\transcodeParams\encodeParams;
use AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody\MPUTasks\transcodeParams\layout;
use AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody\MPUTasks\transcodeParams\userInfos;
use AlibabaCloud\Tea\Model;

class transcodeParams extends Model
{
    /**
     * @description The global background image.
     *
     * @var background
     */
    public $background;

    /**
     * @description The encoding parameters of the output stream.
     *
     * @var encodeParams
     */
    public $encodeParams;

    /**
     * @description The video layout information.
     *
     * >  The video layout information includes the x-coordinate, y-coordinate, width, height, and layer of the pane. For audio-only transcoding, no video layout information is returned.
     *
     * @var layout
     */
    public $layout;

    /**
     * @description The information about the user whose stream is mixed. If an empty value is returned, streams from all users are mixed.
     *
     * @var userInfos[]
     */
    public $userInfos;
    protected $_name = [
        'background' => 'Background',
        'encodeParams' => 'EncodeParams',
        'layout' => 'Layout',
        'userInfos' => 'UserInfos',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->background) {
            $res['Background'] = null !== $this->background ? $this->background->toMap() : null;
        }
        if (null !== $this->encodeParams) {
            $res['EncodeParams'] = null !== $this->encodeParams ? $this->encodeParams->toMap() : null;
        }
        if (null !== $this->layout) {
            $res['Layout'] = null !== $this->layout ? $this->layout->toMap() : null;
        }
        if (null !== $this->userInfos) {
            $res['UserInfos'] = [];
            if (null !== $this->userInfos && \is_array($this->userInfos)) {
                $n = 0;
                foreach ($this->userInfos as $item) {
                    $res['UserInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Background'])) {
            $model->background = background::fromMap($map['Background']);
        }
        if (isset($map['EncodeParams'])) {
            $model->encodeParams = encodeParams::fromMap($map['EncodeParams']);
        }
        if (isset($map['Layout'])) {
            $model->layout = layout::fromMap($map['Layout']);
        }
        if (isset($map['UserInfos'])) {
            if (!empty($map['UserInfos'])) {
                $model->userInfos = [];
                $n = 0;
                foreach ($map['UserInfos'] as $item) {
                    $model->userInfos[$n++] = null !== $item ? userInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
