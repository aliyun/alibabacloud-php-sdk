<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertSceneByEventResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertSceneByEventResponseBody\data\targets;

class data extends Model
{
    /**
     * @var string
     */
    public $alertName;

    /**
     * @var string
     */
    public $alertNameId;

    /**
     * @var string
     */
    public $alertTile;

    /**
     * @var string
     */
    public $alertTileId;

    /**
     * @var string
     */
    public $alertType;

    /**
     * @var string
     */
    public $alertTypeId;

    /**
     * @var targets[]
     */
    public $targets;
    protected $_name = [
        'alertName' => 'AlertName',
        'alertNameId' => 'AlertNameId',
        'alertTile' => 'AlertTile',
        'alertTileId' => 'AlertTileId',
        'alertType' => 'AlertType',
        'alertTypeId' => 'AlertTypeId',
        'targets' => 'Targets',
    ];

    public function validate()
    {
        if (\is_array($this->targets)) {
            Model::validateArray($this->targets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }

        if (null !== $this->alertNameId) {
            $res['AlertNameId'] = $this->alertNameId;
        }

        if (null !== $this->alertTile) {
            $res['AlertTile'] = $this->alertTile;
        }

        if (null !== $this->alertTileId) {
            $res['AlertTileId'] = $this->alertTileId;
        }

        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }

        if (null !== $this->alertTypeId) {
            $res['AlertTypeId'] = $this->alertTypeId;
        }

        if (null !== $this->targets) {
            if (\is_array($this->targets)) {
                $res['Targets'] = [];
                $n1 = 0;
                foreach ($this->targets as $item1) {
                    $res['Targets'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }

        if (isset($map['AlertNameId'])) {
            $model->alertNameId = $map['AlertNameId'];
        }

        if (isset($map['AlertTile'])) {
            $model->alertTile = $map['AlertTile'];
        }

        if (isset($map['AlertTileId'])) {
            $model->alertTileId = $map['AlertTileId'];
        }

        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }

        if (isset($map['AlertTypeId'])) {
            $model->alertTypeId = $map['AlertTypeId'];
        }

        if (isset($map['Targets'])) {
            if (!empty($map['Targets'])) {
                $model->targets = [];
                $n1 = 0;
                foreach ($map['Targets'] as $item1) {
                    $model->targets[$n1++] = targets::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
