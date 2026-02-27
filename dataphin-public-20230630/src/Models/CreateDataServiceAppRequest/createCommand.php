<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataServiceAppRequest;

use AlibabaCloud\Dara\Model;

class createCommand extends Model
{
    /**
     * @var int
     */
    public $appGroupId;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appSecret;

    /**
     * @var string[]
     */
    public $ownerIds;

    /**
     * @var string
     */
    public $scenarios;
    protected $_name = [
        'appGroupId' => 'AppGroupId',
        'appKey' => 'AppKey',
        'appName' => 'AppName',
        'appSecret' => 'AppSecret',
        'ownerIds' => 'OwnerIds',
        'scenarios' => 'Scenarios',
    ];

    public function validate()
    {
        if (\is_array($this->ownerIds)) {
            Model::validateArray($this->ownerIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appGroupId) {
            $res['AppGroupId'] = $this->appGroupId;
        }

        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appSecret) {
            $res['AppSecret'] = $this->appSecret;
        }

        if (null !== $this->ownerIds) {
            if (\is_array($this->ownerIds)) {
                $res['OwnerIds'] = [];
                $n1 = 0;
                foreach ($this->ownerIds as $item1) {
                    $res['OwnerIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scenarios) {
            $res['Scenarios'] = $this->scenarios;
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
        if (isset($map['AppGroupId'])) {
            $model->appGroupId = $map['AppGroupId'];
        }

        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppSecret'])) {
            $model->appSecret = $map['AppSecret'];
        }

        if (isset($map['OwnerIds'])) {
            if (!empty($map['OwnerIds'])) {
                $model->ownerIds = [];
                $n1 = 0;
                foreach ($map['OwnerIds'] as $item1) {
                    $model->ownerIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Scenarios'])) {
            $model->scenarios = $map['Scenarios'];
        }

        return $model;
    }
}
