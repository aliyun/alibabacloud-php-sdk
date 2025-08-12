<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveMPUTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveMPUTaskRequest\transcodeParams\background;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveMPUTaskRequest\transcodeParams\encodeParams;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveMPUTaskRequest\transcodeParams\layout;
use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveMPUTaskRequest\transcodeParams\userInfos;

class transcodeParams extends Model
{
    /**
     * @var background
     */
    public $background;

    /**
     * @var encodeParams
     */
    public $encodeParams;

    /**
     * @var layout
     */
    public $layout;

    /**
     * @var userInfos[]
     */
    public $userInfos;
    protected $_name = [
        'background' => 'Background',
        'encodeParams' => 'EncodeParams',
        'layout' => 'Layout',
        'userInfos' => 'UserInfos',
    ];

    public function validate()
    {
        if (null !== $this->background) {
            $this->background->validate();
        }
        if (null !== $this->encodeParams) {
            $this->encodeParams->validate();
        }
        if (null !== $this->layout) {
            $this->layout->validate();
        }
        if (\is_array($this->userInfos)) {
            Model::validateArray($this->userInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->background) {
            $res['Background'] = null !== $this->background ? $this->background->toArray($noStream) : $this->background;
        }

        if (null !== $this->encodeParams) {
            $res['EncodeParams'] = null !== $this->encodeParams ? $this->encodeParams->toArray($noStream) : $this->encodeParams;
        }

        if (null !== $this->layout) {
            $res['Layout'] = null !== $this->layout ? $this->layout->toArray($noStream) : $this->layout;
        }

        if (null !== $this->userInfos) {
            if (\is_array($this->userInfos)) {
                $res['UserInfos'] = [];
                $n1 = 0;
                foreach ($this->userInfos as $item1) {
                    $res['UserInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1 = 0;
                foreach ($map['UserInfos'] as $item1) {
                    $model->userInfos[$n1] = userInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
