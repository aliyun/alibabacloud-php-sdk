<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Dara\Model;

class DescribeOfficeSitesRequest extends Model
{
    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string[]
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'clientId' => 'ClientId',
        'officeSiteId' => 'OfficeSiteId',
        'regionId' => 'RegionId',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        if (\is_array($this->officeSiteId)) {
            Model::validateArray($this->officeSiteId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->officeSiteId) {
            if (\is_array($this->officeSiteId)) {
                $res['OfficeSiteId'] = [];
                $n1 = 0;
                foreach ($this->officeSiteId as $item1) {
                    $res['OfficeSiteId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['OfficeSiteId'])) {
            if (!empty($map['OfficeSiteId'])) {
                $model->officeSiteId = [];
                $n1 = 0;
                foreach ($map['OfficeSiteId'] as $item1) {
                    $model->officeSiteId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
