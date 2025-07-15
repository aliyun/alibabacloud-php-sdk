<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\AppInfoDTO\platforms;
use AlibabaCloud\Tea\Model;

class AppInfoDTO extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @example 1-普通应用，2-内嵌SDK.
     *
     * @var int
     */
    public $appType;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $modificationTime;

    /**
     * @var platforms[]
     */
    public $platforms;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'appName' => 'AppName',
        'appType' => 'AppType',
        'creationTime' => 'CreationTime',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'itemId' => 'ItemId',
        'modificationTime' => 'ModificationTime',
        'platforms' => 'Platforms',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }
        if (null !== $this->platforms) {
            $res['Platforms'] = [];
            if (null !== $this->platforms && \is_array($this->platforms)) {
                $n = 0;
                foreach ($this->platforms as $item) {
                    $res['Platforms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AppInfoDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }
        if (isset($map['Platforms'])) {
            if (!empty($map['Platforms'])) {
                $model->platforms = [];
                $n = 0;
                foreach ($map['Platforms'] as $item) {
                    $model->platforms[$n++] = null !== $item ? platforms::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
