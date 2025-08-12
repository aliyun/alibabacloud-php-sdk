<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\mixLayoutParams\mixBackground;
use AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\mixLayoutParams\userPanes;

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

    public function validate()
    {
        if (null !== $this->mixBackground) {
            $this->mixBackground->validate();
        }
        if (\is_array($this->userPanes)) {
            Model::validateArray($this->userPanes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mixBackground) {
            $res['MixBackground'] = null !== $this->mixBackground ? $this->mixBackground->toArray($noStream) : $this->mixBackground;
        }

        if (null !== $this->userPanes) {
            if (\is_array($this->userPanes)) {
                $res['UserPanes'] = [];
                $n1 = 0;
                foreach ($this->userPanes as $item1) {
                    $res['UserPanes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MixBackground'])) {
            $model->mixBackground = mixBackground::fromMap($map['MixBackground']);
        }

        if (isset($map['UserPanes'])) {
            if (!empty($map['UserPanes'])) {
                $model->userPanes = [];
                $n1 = 0;
                foreach ($map['UserPanes'] as $item1) {
                    $model->userPanes[$n1] = userPanes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
