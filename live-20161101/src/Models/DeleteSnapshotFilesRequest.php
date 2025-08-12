<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class DeleteSnapshotFilesRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var int[]
     */
    public $createTimestampList;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $removeFile;

    /**
     * @var string
     */
    public $streamName;
    protected $_name = [
        'appName' => 'AppName',
        'createTimestampList' => 'CreateTimestampList',
        'domainName' => 'DomainName',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'removeFile' => 'RemoveFile',
        'streamName' => 'StreamName',
    ];

    public function validate()
    {
        if (\is_array($this->createTimestampList)) {
            Model::validateArray($this->createTimestampList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->createTimestampList) {
            if (\is_array($this->createTimestampList)) {
                $res['CreateTimestampList'] = [];
                $n1 = 0;
                foreach ($this->createTimestampList as $item1) {
                    $res['CreateTimestampList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->removeFile) {
            $res['RemoveFile'] = $this->removeFile;
        }

        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
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

        if (isset($map['CreateTimestampList'])) {
            if (!empty($map['CreateTimestampList'])) {
                $model->createTimestampList = [];
                $n1 = 0;
                foreach ($map['CreateTimestampList'] as $item1) {
                    $model->createTimestampList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RemoveFile'])) {
            $model->removeFile = $map['RemoveFile'];
        }

        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
