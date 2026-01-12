<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models;

use AlibabaCloud\Dara\Model;

class BatchCreateSvcMapBindRequest extends Model
{
    /**
     * @var string
     */
    public $jwtToken;

    /**
     * @var int[]
     */
    public $mapIds;

    /**
     * @var int
     */
    public $svcId;
    protected $_name = [
        'jwtToken' => 'JwtToken',
        'mapIds' => 'MapIds',
        'svcId' => 'SvcId',
    ];

    public function validate()
    {
        if (\is_array($this->mapIds)) {
            Model::validateArray($this->mapIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jwtToken) {
            $res['JwtToken'] = $this->jwtToken;
        }

        if (null !== $this->mapIds) {
            if (\is_array($this->mapIds)) {
                $res['MapIds'] = [];
                $n1 = 0;
                foreach ($this->mapIds as $item1) {
                    $res['MapIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->svcId) {
            $res['SvcId'] = $this->svcId;
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
        if (isset($map['JwtToken'])) {
            $model->jwtToken = $map['JwtToken'];
        }

        if (isset($map['MapIds'])) {
            if (!empty($map['MapIds'])) {
                $model->mapIds = [];
                $n1 = 0;
                foreach ($map['MapIds'] as $item1) {
                    $model->mapIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SvcId'])) {
            $model->svcId = $map['SvcId'];
        }

        return $model;
    }
}
