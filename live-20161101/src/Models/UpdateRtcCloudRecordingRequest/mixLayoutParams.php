<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\UpdateRtcCloudRecordingRequest;

use AlibabaCloud\SDK\Live\V20161101\Models\UpdateRtcCloudRecordingRequest\mixLayoutParams\mixBackground;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateRtcCloudRecordingRequest\mixLayoutParams\userPanes;
use AlibabaCloud\Tea\Model;

class mixLayoutParams extends Model
{
    /**
     * @var mixBackground
     */
    public $mixBackground;

    /**
     * @var userPanes[]
     */
    public $userPanes;
    protected $_name = [
        'mixBackground' => 'MixBackground',
        'userPanes' => 'UserPanes',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mixBackground) {
            $res['MixBackground'] = null !== $this->mixBackground ? $this->mixBackground->toMap() : null;
        }
        if (null !== $this->userPanes) {
            $res['UserPanes'] = [];
            if (null !== $this->userPanes && \is_array($this->userPanes)) {
                $n = 0;
                foreach ($this->userPanes as $item) {
                    $res['UserPanes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mixLayoutParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MixBackground'])) {
            $model->mixBackground = mixBackground::fromMap($map['MixBackground']);
        }
        if (isset($map['UserPanes'])) {
            if (!empty($map['UserPanes'])) {
                $model->userPanes = [];
                $n = 0;
                foreach ($map['UserPanes'] as $item) {
                    $model->userPanes[$n++] = null !== $item ? userPanes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
