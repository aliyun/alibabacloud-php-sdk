<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\EditAppInfoRequest\platforms;

class EditAppInfoRequest extends Model
{
    /**
     * @var string
     */
    public $appItemId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $appType;

    /**
     * @var platforms[]
     */
    public $platforms;
    protected $_name = [
        'appItemId' => 'AppItemId',
        'appName' => 'AppName',
        'appType' => 'AppType',
        'platforms' => 'Platforms',
    ];

    public function validate()
    {
        if (\is_array($this->platforms)) {
            Model::validateArray($this->platforms);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appItemId) {
            $res['AppItemId'] = $this->appItemId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->platforms) {
            if (\is_array($this->platforms)) {
                $res['Platforms'] = [];
                $n1 = 0;
                foreach ($this->platforms as $item1) {
                    $res['Platforms'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AppItemId'])) {
            $model->appItemId = $map['AppItemId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['Platforms'])) {
            if (!empty($map['Platforms'])) {
                $model->platforms = [];
                $n1 = 0;
                foreach ($map['Platforms'] as $item1) {
                    $model->platforms[$n1] = platforms::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
