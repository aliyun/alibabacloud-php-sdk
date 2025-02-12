<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserDetailResponseBody\userDetail\onlinePeriods;

class userDetail extends Model
{
    /**
     * @var int
     */
    public $createdTs;
    /**
     * @var int
     */
    public $destroyedTs;
    /**
     * @var int
     */
    public $duration;
    /**
     * @var string
     */
    public $location;
    /**
     * @var string
     */
    public $network;
    /**
     * @var int
     */
    public $onlineDuration;
    /**
     * @var onlinePeriods[]
     */
    public $onlinePeriods;
    /**
     * @var string
     */
    public $os;
    /**
     * @var string
     */
    public $sdkVersion;
    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'createdTs'      => 'CreatedTs',
        'destroyedTs'    => 'DestroyedTs',
        'duration'       => 'Duration',
        'location'       => 'Location',
        'network'        => 'Network',
        'onlineDuration' => 'OnlineDuration',
        'onlinePeriods'  => 'OnlinePeriods',
        'os'             => 'Os',
        'sdkVersion'     => 'SdkVersion',
        'userId'         => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->onlinePeriods)) {
            Model::validateArray($this->onlinePeriods);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdTs) {
            $res['CreatedTs'] = $this->createdTs;
        }

        if (null !== $this->destroyedTs) {
            $res['DestroyedTs'] = $this->destroyedTs;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }

        if (null !== $this->onlineDuration) {
            $res['OnlineDuration'] = $this->onlineDuration;
        }

        if (null !== $this->onlinePeriods) {
            if (\is_array($this->onlinePeriods)) {
                $res['OnlinePeriods'] = [];
                $n1                   = 0;
                foreach ($this->onlinePeriods as $item1) {
                    $res['OnlinePeriods'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }

        if (null !== $this->sdkVersion) {
            $res['SdkVersion'] = $this->sdkVersion;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['CreatedTs'])) {
            $model->createdTs = $map['CreatedTs'];
        }

        if (isset($map['DestroyedTs'])) {
            $model->destroyedTs = $map['DestroyedTs'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }

        if (isset($map['OnlineDuration'])) {
            $model->onlineDuration = $map['OnlineDuration'];
        }

        if (isset($map['OnlinePeriods'])) {
            if (!empty($map['OnlinePeriods'])) {
                $model->onlinePeriods = [];
                $n1                   = 0;
                foreach ($map['OnlinePeriods'] as $item1) {
                    $model->onlinePeriods[$n1++] = onlinePeriods::fromMap($item1);
                }
            }
        }

        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }

        if (isset($map['SdkVersion'])) {
            $model->sdkVersion = $map['SdkVersion'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
