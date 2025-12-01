<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\BatchModifyEntitlementResponseBody\entitlements;

use AlibabaCloud\Dara\Model;

class assignModels extends Model
{
    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string[]
     */
    public $endUserIds;

    /**
     * @var string
     */
    public $innerStatus;
    protected $_name = [
        'desktopId' => 'DesktopId',
        'endUserIds' => 'EndUserIds',
        'innerStatus' => 'InnerStatus',
    ];

    public function validate()
    {
        if (\is_array($this->endUserIds)) {
            Model::validateArray($this->endUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }

        if (null !== $this->endUserIds) {
            if (\is_array($this->endUserIds)) {
                $res['EndUserIds'] = [];
                $n1 = 0;
                foreach ($this->endUserIds as $item1) {
                    $res['EndUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->innerStatus) {
            $res['InnerStatus'] = $this->innerStatus;
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
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }

        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = [];
                $n1 = 0;
                foreach ($map['EndUserIds'] as $item1) {
                    $model->endUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InnerStatus'])) {
            $model->innerStatus = $map['InnerStatus'];
        }

        return $model;
    }
}
