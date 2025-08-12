<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class DeleteLiveStreamRecordIndexFilesRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string[]
     */
    public $recordId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $removeFile;

    /**
     * @var string
     */
    public $streamName;
    protected $_name = [
        'appName' => 'AppName',
        'domainName' => 'DomainName',
        'ownerId' => 'OwnerId',
        'recordId' => 'RecordId',
        'regionId' => 'RegionId',
        'removeFile' => 'RemoveFile',
        'streamName' => 'StreamName',
    ];

    public function validate()
    {
        if (\is_array($this->recordId)) {
            Model::validateArray($this->recordId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->recordId) {
            if (\is_array($this->recordId)) {
                $res['RecordId'] = [];
                $n1 = 0;
                foreach ($this->recordId as $item1) {
                    $res['RecordId'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RecordId'])) {
            if (!empty($map['RecordId'])) {
                $model->recordId = [];
                $n1 = 0;
                foreach ($map['RecordId'] as $item1) {
                    $model->recordId[$n1] = $item1;
                    ++$n1;
                }
            }
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
