<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListMigrationZonesResponseBody\zoneList;

class ListMigrationZonesResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var zoneList[]
     */
    public $zoneList;
    protected $_name = [
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
        'zoneList' => 'zoneList',
    ];

    public function validate()
    {
        if (\is_array($this->zoneList)) {
            Model::validateArray($this->zoneList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->zoneList) {
            if (\is_array($this->zoneList)) {
                $res['zoneList'] = [];
                $n1 = 0;
                foreach ($this->zoneList as $item1) {
                    $res['zoneList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['zoneList'])) {
            if (!empty($map['zoneList'])) {
                $model->zoneList = [];
                $n1 = 0;
                foreach ($map['zoneList'] as $item1) {
                    $model->zoneList[$n1] = zoneList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
