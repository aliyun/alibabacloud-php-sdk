<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ADBAI\V20250812\Models\GetEmbodiedAIPlatformResourceUsageInfoResponseBody;

use AlibabaCloud\Dara\Model;

class acuDetails extends Model
{
    /**
     * @var float
     */
    public $eapWebserverACUCount;

    /**
     * @var float
     */
    public $rayHeadACUCount;

    /**
     * @var float
     */
    public $rayWorkerACUCount;

    /**
     * @var float
     */
    public $totalACUCount;
    protected $_name = [
        'eapWebserverACUCount' => 'EapWebserverACUCount',
        'rayHeadACUCount' => 'RayHeadACUCount',
        'rayWorkerACUCount' => 'RayWorkerACUCount',
        'totalACUCount' => 'TotalACUCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eapWebserverACUCount) {
            $res['EapWebserverACUCount'] = $this->eapWebserverACUCount;
        }

        if (null !== $this->rayHeadACUCount) {
            $res['RayHeadACUCount'] = $this->rayHeadACUCount;
        }

        if (null !== $this->rayWorkerACUCount) {
            $res['RayWorkerACUCount'] = $this->rayWorkerACUCount;
        }

        if (null !== $this->totalACUCount) {
            $res['TotalACUCount'] = $this->totalACUCount;
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
        if (isset($map['EapWebserverACUCount'])) {
            $model->eapWebserverACUCount = $map['EapWebserverACUCount'];
        }

        if (isset($map['RayHeadACUCount'])) {
            $model->rayHeadACUCount = $map['RayHeadACUCount'];
        }

        if (isset($map['RayWorkerACUCount'])) {
            $model->rayWorkerACUCount = $map['RayWorkerACUCount'];
        }

        if (isset($map['TotalACUCount'])) {
            $model->totalACUCount = $map['TotalACUCount'];
        }

        return $model;
    }
}
