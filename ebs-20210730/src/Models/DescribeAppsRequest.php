<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Dara\Model;

class DescribeAppsRequest extends Model
{
    /**
     * @var string[]
     */
    public $appIds;

    /**
     * @var string[]
     */
    public $appNames;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'appIds' => 'AppIds',
        'appNames' => 'AppNames',
        'clientToken' => 'ClientToken',
        'owner' => 'Owner',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->appIds)) {
            Model::validateArray($this->appIds);
        }
        if (\is_array($this->appNames)) {
            Model::validateArray($this->appNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appIds) {
            if (\is_array($this->appIds)) {
                $res['AppIds'] = [];
                $n1 = 0;
                foreach ($this->appIds as $item1) {
                    $res['AppIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->appNames) {
            if (\is_array($this->appNames)) {
                $res['AppNames'] = [];
                $n1 = 0;
                foreach ($this->appNames as $item1) {
                    $res['AppNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AppIds'])) {
            if (!empty($map['AppIds'])) {
                $model->appIds = [];
                $n1 = 0;
                foreach ($map['AppIds'] as $item1) {
                    $model->appIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AppNames'])) {
            if (!empty($map['AppNames'])) {
                $model->appNames = [];
                $n1 = 0;
                foreach ($map['AppNames'] as $item1) {
                    $model->appNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
