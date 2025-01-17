<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\AppInfoDTO\platforms;

class AppInfoDTO extends Model
{
    /**
     * @var string
     */
    public $appName;
    /**
     * @var int
     */
    public $appType;
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $itemId;
    /**
     * @var platforms[]
     */
    public $platforms;
    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'appName'   => 'AppName',
        'appType'   => 'AppType',
        'gmtCreate' => 'GmtCreate',
        'itemId'    => 'ItemId',
        'platforms' => 'Platforms',
        'userId'    => 'UserId',
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
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }

        if (null !== $this->platforms) {
            if (\is_array($this->platforms)) {
                $res['Platforms'] = [];
                $n1               = 0;
                foreach ($this->platforms as $item1) {
                    $res['Platforms'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }

        if (isset($map['Platforms'])) {
            if (!empty($map['Platforms'])) {
                $model->platforms = [];
                $n1               = 0;
                foreach ($map['Platforms'] as $item1) {
                    $model->platforms[$n1++] = platforms::fromMap($item1);
                }
            }
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
