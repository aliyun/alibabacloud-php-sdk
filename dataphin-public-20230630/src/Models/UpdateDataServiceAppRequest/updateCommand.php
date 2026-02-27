<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateDataServiceAppRequest;

use AlibabaCloud\Dara\Model;

class updateCommand extends Model
{
    /**
     * @var int
     */
    public $appGroupId;

    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

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
        'appId' => 'AppId',
        'appName' => 'AppName',
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

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
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

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
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
